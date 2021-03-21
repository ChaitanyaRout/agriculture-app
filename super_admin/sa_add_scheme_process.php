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
            else if($type == 1 && $_FILES["file"]["name"])
            {
                // $helper->setErrorSession(4);
                // $helper->redirect_link('sa_add_scheme');
            }
            
            $uploadOk = 0;
            $extension = "";
            if($type == 1)
            {
                $target_dir = "../uploads/";
                $extension = strtolower(pathinfo($$target_dir . basename($_FILES["file"]["name"]),PATHINFO_EXTENSION));
                $target_file = $target_dir . basename($_FILES["file"]["tmp_name"]).".".$extension;
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                    error_log("The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.");
                    $uploadOk = 1;
                } else {
                    error_log("Sorry, there was an error uploading your file.");
                }
            }
            
            $obj_scheme = new ModelScheme();
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
        else
        {
            $helper->redirect_link('sa_login');
        }
		$helper->redirect_link('sa_show_schemes');
	}
?>