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
            <select id="selectid" class="select-box wide text-center" name="state" style="display: none;">
                <option value="">Select</option>
                {foreach $states as $state}
                    <option value="{$state['id']}">{$state['state_name']}</option>
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
                        <li data-value="{$state['id']}" class="option">{$state['state_name']}</li>
                    {/foreach}
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-4"></div>
    </div>
    </div>
</div>
<script>
$(document).ready(function() {
    
        
        // Unbind existing events in case that the plugin has been initialized before
        $(document).off('.nice_select');

        // Open/close
        $(document).on('click.nice_select', '.nice-select', function(event) {
            var $dropdown = $(this);

            $('.nice-select').not($dropdown).removeClass('open');
            $dropdown.toggleClass('open');

            if ($dropdown.hasClass('open')) {
                $dropdown.find('.option');
                $dropdown.find('.nice-select-search').val('');
                $dropdown.find('.nice-select-search').focus();
                $dropdown.find('.focus').removeClass('focus');
                $dropdown.find('.selected').addClass('focus');
                $dropdown.find('ul li').show();
            } else {
                $dropdown.focus();
            }
        });

        $(document).on('click', '.nice-select-search-box', function(event) {
            event.stopPropagation();
            return false;
        });
        $(document).on('keyup.nice-select-search', '.nice-select', function() {
            var $self = $(this);
            var $text = $self.find('.nice-select-search').val();
            var $options = $self.find('ul li');
            if ($text == '')
                $options.show();
            else if ($self.hasClass('open')) {
                $text = $text.toLowerCase();
                var $matchReg = new RegExp($text);
                if (0 < $options.length) {
                    $options.each(function() {
                        var $this = $(this);
                        var $optionText = $this.text().toLowerCase();
                        var $matchCheck = $matchReg.test($optionText);
                        $matchCheck ? $this.show() : $this.hide();
                    })
                } else {
                    $options.show();
                }
            }
            $self.find('.option'),
                $self.find('.focus').removeClass('focus'),
                $self.find('.selected').addClass('focus');
        })

        // Close when clicking outside
        $(document).on('click.nice_select', function(event) {
            if ($(event.target).closest('.nice-select').length === 0) {
                $('.nice-select').removeClass('open').find('.option');
            }
        });

        // Option click
        $(document).on('click.nice_select', '.nice-select .option:not(.disabled)', function(event) {
            var $option = $(this);
            var $dropdown = $option.closest('.nice-select');
            if ($dropdown.hasClass('has-multiple')) {
                if ($option.hasClass('selected')) {
                    $option.removeClass('selected');
                } else {
                    $option.addClass('selected');
                }
                $selected_html = '';
                $selected_values = [];
                $dropdown.find('.selected').each(function() {
                    $selected_option = $(this);
                    var text = $selected_option.data('display') || $selected_option.text()
                    $selected_html += '<span class="current">' + text + '</span>';
                    $selected_values.push($selected_option.data('value'));
                });
                $select_placeholder = $dropdown.prev('select').data('placeholder') || $dropdown.prev('select').attr('placeholder');
                $select_placeholder = $select_placeholder == '' ? 'Select' : $select_placeholder;
                $selected_html = $selected_html == '' ? $select_placeholder : $selected_html;
                $dropdown.find('.multiple-options').html($selected_html);
                $dropdown.prev('select').val($selected_values).trigger('change');
            } else {
                $dropdown.find('.selected').removeClass('selected');
                $option.addClass('selected');
                var text = $option.data('display') || $option.text();
                $dropdown.find('.current').text(text);
                $dropdown.prev('select').val($option.data('value')).trigger('change');
            }
        });

        // Keyboard events
        $(document).on('keydown.nice_select', '.nice-select', function(event) {
            var $dropdown = $(this);
            var $focused_option = $($dropdown.find('.focus') || $dropdown.find('.list .option.selected'));

            // Space or Enter
            if (event.keyCode == 32 || event.keyCode == 13) {
                if ($dropdown.hasClass('open')) {
                    $focused_option.trigger('click');
                } else {
                    $dropdown.trigger('click');
                }
                return false;
                // Down
            } else if (event.keyCode == 40) {
                if (!$dropdown.hasClass('open')) {
                    $dropdown.trigger('click');
                } else {
                    var $next = $focused_option.nextAll('.option:not(.disabled)').first();
                    if ($next.length > 0) {
                        $dropdown.find('.focus').removeClass('focus');
                        $next.addClass('focus');
                    }
                }
                return false;
                // Up
            } else if (event.keyCode == 38) {
                if (!$dropdown.hasClass('open')) {
                    $dropdown.trigger('click');
                } else {
                    var $prev = $focused_option.prevAll('.option:not(.disabled)').first();
                    if ($prev.length > 0) {
                        $dropdown.find('.focus').removeClass('focus');
                        $prev.addClass('focus');
                    }
                }
                return false;
                // Esc
            } else if (event.keyCode == 27) {
                if ($dropdown.hasClass('open')) {
                    $dropdown.trigger('click');
                }
                // Tab
            } else if (event.keyCode == 9) {
                if ($dropdown.hasClass('open')) {
                    return false;
                }
            }
        });

        // Detect CSS pointer-events support, for IE <= 10. From Modernizr.
        var style = document.createElement('a').style;
        style.cssText = 'pointer-events:auto';
        if (style.pointerEvents !== 'auto') {
            $('html').addClass('no-csspointerevents');
        }

        return this;
});
</script>
{include file="footer.tpl"}