@if(config('atv-theme-pkg.DEV'))
    <?php $atv_theme_pkg_prefix = '/packages/abs/atv-theme-pkg/src';?>
@else
    <?php $atv_theme_pkg_prefix = '';?>
@endif

<script type="text/javascript">
	app.config(['$routeProvider', function($routeProvider) {

	    $routeProvider.
	    when('/', {
	        template: '<home></home>',
	        title: 'Theme Home',
	    }).
	    when('/login', {
	        template: '<login></login>',
	        title: 'Login',
	    }).
	    when('/forgot-password', {
	        template: '<forgot-password></forgot-password>',
	        title: 'Forgot Password',
	    }).
	    when('/reset-password', {
	        template: '<reset-password></reset-password>',
	        title: 'Reset Password',
	    });
	}]);

    var atv_theme_home_template_url = "{{asset($atv_theme_pkg_prefix.'/public/themes/'.$theme.'/static-pages/home.html')}}";
    var atv_theme_login_template_url = "{{asset($atv_theme_pkg_prefix.'/public/themes/'.$theme.'/static-pages/auth/login.html')}}";
</script>
<script type="text/javascript" src="{{asset($atv_theme_pkg_prefix.'/public/themes/'.$theme.'/static-pages/controller.js')}}"></script>
