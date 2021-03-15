{include file="header.tpl"}
{include file="menu.tpl"}
<div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/banner1.jpg" class="image_carousel" alt="banner1">
            </div>

            <div class="item">
                <img src="images/banner2.jpg" class="image_carousel" alt="banner2">
            </div>

            <div class="item">
                <img src="images/banner3.jpg" class="image_carousel" alt="banner3">
            </div>

            <div class="item">
                <img src="images/banner4.jpg" class="image_carousel" alt="banner4">
            </div>

            <div class="item">
                <img src="images/banner5.jpg" class="image_carousel" alt="banner5">
            </div>

            <div class="item">
                <img src="images/banner7.jpg" class="image_carousel" alt="banner7">
            </div>

            <div class="item">
                <img src="images/banner8.jpg" class="image_carousel" alt="banner8">
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<br>
<div class="container-fluid select_state">
    <div class="padding0px" align="center">
		<h4>Online services in this portal are available only for the States listed below</h4>
	</div>
    <div class="col-md-12 padding: 0px" align="center"> 					
		<h4 style="font-family: Times New Roman, Georgia, Serif; color: green; margin: 0px 0 12px 0; letter-spacing: 0.5px;" class="state-text">
			Please select the State from where the service is to be taken	      
		</h4>      
    <div class="row">
        <div class="col-lg-4 col-md-4"></div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <select id="select_state" class="select-box wide text-center" name="state" style="display: none;">
                <option value="">Select</option>
                {foreach $states as $state}
                    <option value="{$state['state_name']}">{$state['state_name']}</option>
                {/foreach}
            </select>
            <div class="nice-select select-box wide" tabindex="0">
                <span class="current">Select</span>
                <div class="nice-select-search-box">
                    <input type="text" class="nice-select-search" placeholder="Search State...">
                </div>
                <ul class="list">
                    <li data-value="" class="option selected">Select</li>
                    {foreach $states as $state}
                        <li data-value="{$state['state_name']}" class="option">{$state['state_name']}</li>
                    {/foreach}
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-4"></div>
    </div>
    </div>
</div>
{include file="footer.tpl"}