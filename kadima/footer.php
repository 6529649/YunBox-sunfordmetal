<!-- kadima Callout Section -->
<?php $wl_theme_options = kadima_get_options(); ?>
	<div style="background-color: #333;">
			<div class="col-md-12" style="background:url(http://sunfordmetal.site.yunclever.com/wp-content/themes/kadima/images/contact-us-bj.jpg) no-repeat 0px 0px;">
							<div class="icon2" style="color: #fff;">
									<div class="col-md-12" style="margin-top: 2em;text-align: center;margin-bottom: 2em;">
											<div class="col-md-3" >
											<ul style=";padding: 0;">
													<li style="display: inline-block;padding: 0.1em 0;"><i class="indicate"></i></li>
													<li style="display: inline-block;padding: 0.1em 0;"><p class="label1">Info@sunfordmetal.com</p></li>
											</ul>
											</div>
											<div class="col-md-3" >
											<ul style=";padding: 0;" style=";padding: 0;margin-top: 1.5em;">
													<li style="display: inline-block;padding: 0.1em 0;"><i class="phone"></i></li>
													<li style="display: inline-block;padding: 0.1em 0;"><p class="label1">+86-592-5165692</p></li>
											</ul>
											</div>
											<div class="col-md-3" >
											<ul style=";padding: 0;" style=";padding: 0;margin-top: 1.5em;">
													<li style="display: inline-block;padding: 0.1em 0;"><i class="message"></i></li>
													<li style="display: inline-block;padding: 0.1em 0;"><p class="label1">+86 13666079207&nbsp&nbsp&nbsp+86 18906002206</p></li>
											</ul>
											</div>
											<div class="col-md-3" >
											<ul style=";padding: 0;" style=";padding: 0;margin-top: 1.5em;">
													<li style="display: inline-block;padding: 0.1em 0;"><i class="skype"></i></li>
													<li style="display: inline-block;padding: 0.1em 0;"><p class="label1">cnsunfordf</p></li>
											</ul>
											</div>
									</div>
							</div>
			</div>
			<div class="col-md-12" style="background-color: #747474;padding-top: 10px;padding-bottom: 10px;">
			    <div class="copyright-right wow fadeInRight animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
			        <ul >
								<?php if($wl_theme_options['fb_link']!='') { ?>
									 <li class="twitter" title="Facebook"><a class="twitter" href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"></a></li>
								<?php } if($wl_theme_options['twitter_link']!='') { ?>
								<li class="twitter facebook" title="Twitter"><a class="twitter facebook" href="<?php echo esc_url($wl_theme_options['twitter_link']) ; ?>"></a></li>
								<?php } if($wl_theme_options['linkedin_link']!='') { ?>
								<li class="twitter chrome" title="Linkedin"><a class="twitter chrome" href="<?php echo esc_url($wl_theme_options['linkedin_link']) ; ?>"></a></li>
								<?php } if($wl_theme_options['youtube_link']!='') { ?>
								<li class="twitter pinterest" title="Youtube"><a class="twitter pinterest" href="<?php echo esc_url($wl_theme_options['youtube_link']) ; ?>"></a></li>
												<?php } if($wl_theme_options['gplus']!='') { ?>
								<li class="twitter linkedin" title="gplus"><a class="twitter linkedin" href="<?php echo esc_url($wl_theme_options['gplus']) ; ?>"></a></li>
												<?php } if($wl_theme_options['instagram']!='') { ?>
								<li class="instagram" title="instagram"><a href="<?php echo esc_url($wl_theme_options['instagram']) ; ?>"></a></li>
												<?php } ?>
			        </ul>
			    </div>
			    <div class="clearfix"> </div>
			    <!--a href="#home" id="toTop" class="scroll" style="display: none;"><span id="toTopHover"></span> <span id="toTopHover" style="opacity: 1;"> </span></a-->
			</div>
	</div>
</div>
<a href="#" title="Go Top" class="kadima_scrollup" style="display: inline;">
    <i class="fa fa-chevron-up"></i>
</a>
<?php if($wl_theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($wl_theme_options['custom_css']); } ?>
</style>
<?php wp_footer(); ?>
<script type="text/javascript" src="//x.translateth.is/translate-this.js"></script>
<script type="text/javascript">
function setCookie(name,value) 
{ 
    var Days = 30; 
    var exp = new Date(); 
    exp.setTime(exp.getTime() + Days*24*60*60*1000); 
    document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString(); 
} 
setCookie('tt-lang','zh-CN');
TranslateThis({
	GA : true,
	noBtn : false,
    btnImg : 'http://x.translateth.is/tt-btn2.png',
    btnHeight : 18,
    btnWidth : 180,    
    noImg : false,
    imgHeight : 12,
    imgWidth : 18,
    bgImage : 'http://x.translateth.is/tt-sprite3.png',
	maxLength : 1000,
    reparse : false
});
</script>
</body>
</html>
