<?php
    $today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-super-admin-add-scheme-process-error.log');

    $p = $helper->getValue('p');

	$check_sa_session = $helper->isSuperAdminSessionStart();

	if (!$check_sa_session)
		$helper->redirect_link('sa_login');
	else
	{
        if($helper->checkMethod("POST"))
        {
            $state_name = $helper->getValue('state_name');
            $scheme_name = $helper->getValue('scheme_name');
            $type = $helper->getValue('type');
            $link = $helper->getValue('link');
            $action = $helper->getValue('action');

            $obj_scheme = new ModelScheme();

            if($action == 'add')
            {
                if(!$state_name)
                {
                    $helper->setErrorSession(1);
                    $helper->redirect_link('sa_add_scheme');
                }
                else if(!$scheme_name)
                {
                    $helper->setErrorSession(2);
                    $helper->redirect_link('sa_add_scheme');
                }
                else if($type == 0 && !$link)
                {
                    $helper->setErrorSession(3);
                    $helper->redirect_link('sa_add_scheme');
                }
                else if($type == 1 && $_FILES["file"]["name"] == '')
                {
                    // $helper->setErrorSession(4);
                    // $helper->redirect_link('sa_add_scheme');
                }
                
                $uploadOk = 0;
                $extension = "";
                if($type == 1)
                {
                    $target_dir = UPLOAD_FILE_PATH;
                    $extension = strtolower(pathinfo($target_dir . basename($_FILES["file"]["name"]),PATHINFO_EXTENSION));
                    $target_file = $target_dir . basename($_FILES["file"]["tmp_name"]).".".$extension;
                    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                        error_log("The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.");
                        $uploadOk = 1;
                    } else {
                        error_log("Sorry, there was an error uploading your file.");
                    }
                }
                
                $obj_scheme->setSateId($state_name);
                $obj_scheme->setSchemeName($scheme_name);
                $obj_scheme->setType($type);

                if($type == 1 && $uploadOk)
                {
                    $obj_scheme->setLink(basename($_FILES["file"]["tmp_name"]).".".$extension);
                    $obj_scheme->insertScheme();
            
                    $helper->setNoticeSession(1);
                }
                else if($type == 0)
                {
                    $obj_scheme->setLink($link);
                    $obj_scheme->insertScheme();
            
                    $helper->setNoticeSession(1);
                }
                else
                {
                    $helper->setErrorSession(5);
                    $helper->redirect_link('sa_add_scheme');
                }
            }
            else if($action == "edit")
            {
                $id = $helper->getValue('id');

                if(!$scheme_name)
                {
                    $helper->setErrorSession(2);
                    $helper->redirect_link('sa_add_scheme&id='.$id);
                }
                else if($type == 0 && !$link)
                {
                    $helper->setErrorSession(3);
                    $helper->redirect_link('sa_add_scheme&id='.$id);
                }
                else if($type == 1 && $_FILES["file"]["name"] == '')
                {}
                $url = false;
                if($type == 1 && $_FILES['file']['name'] != '')
                {
                    unlink(UPLOAD_FILE_PATH."".$helper->getValue('previous_file'));
                    $uploadOk = 0;
                    $extension = "";
                    $target_dir = UPLOAD_FILE_PATH;
                    $extension = strtolower(pathinfo($target_dir . basename($_FILES["file"]["name"]),PATHINFO_EXTENSION));
                    $target_file = $target_dir . basename($_FILES["file"]["tmp_name"]).".".$extension;
                    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                        error_log("The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.");
                        $uploadOk = 1;
                    } else {
                        error_log("Sorry, there was an error uploading your file.");
                    }
                    $url = basename($_FILES["file"]["tmp_name"]).".".$extension;
                }
                else
                {
                    $url = $helper->getValue('previous_file');
                }
                
                $obj_scheme->setId($id);
                $obj_scheme->setSchemeName($scheme_name);
                $obj_scheme->setType($type);

                if($type == 1)
                {
                    $obj_scheme->setLink($url);
                    $obj_scheme->updateScheme();
            
                    $helper->setNoticeSession(1);
                }
                else if($type == 0)
                {
                    $obj_scheme->setLink($link);
                    $obj_scheme->updateScheme();
            
                    $helper->setNoticeSession(1);
                }
                else
                {
                    $helper->setErrorSession(5);
                    $helper->redirect_link('sa_add_scheme&id='.$id);
                }
            }
        }
        else if($helper->checkMethod("GET"))
        {
            $action = $helper->getValue('action');
            if($action == "delete")
            {
                $id = $helper->getValue('id');
                $obj_scheme = new ModelScheme();
                $obj_scheme->setId($id);
                $scheme = $obj_scheme->getSchemeById();
                if($scheme['type'] == 1)
                {
                    unlink(UPLOAD_FILE_PATH."".$scheme['link']);
                }
                $obj_scheme->deleteScheme();
            }
        }
        else
        {
            $helper->redirect_link('sa_dashboard');
        }
		$helper->redirect_link('sa_show_schemes');
	}
?>