// admin profile
app.controller('adminInfo', function($scope){
	$scope.data=[
		{name:'Varun Dev', email:'varundev2727@gmail.com',contact:'+91-9891189122'}
	]
});

// Nav Controller
app.controller('navCtrl', function($scope){

	$scope.userInfo=[
		{userImg:'img/user.jpg', name:'Varun Dev', role:'Admin'}
	],

	// $scope.userImg="img/user.jpg";
	// $scope.name="Varun Dev";
	// $scope.email="Admin";

    $scope.menu = [
        { faicon:'fa-dashboard', url: 'index.php', text: 'Dashboard'},
        { faicon:'fa-magic', url: '#', text: 'UI-kit', tgt: 'uikit', ddicon:'caret',
            	
            	submenu: [
	                { text: 'Buttons', url: 'buttons.php' },
	                { text: 'Icon', url: 'icons.php'},
	                { text: 'Component', url: 'component.php'},
	                { text: 'Pricing', url: 'pricing.php'},
	                { text: 'Maps', url: 'maps.php'},
	                { text: 'Grid', url: 'grid.php'},
	                { text: 'Typography', url: 'typography.php'}
            	]
        },

        { faicon:'fa-file-text-o', url: '#', text: 'Pages', tgt: 'pages', ddicon:'caret',

        		submenu:[
					{text: 'Login', url: 'login.php'},
					{text: 'Signup', url: 'signup.php'},
					{text: 'Forget Password', url: 'foregetpassword.php'},
					{text: 'User Profile', url: 'userprofile.php'},
					{text: 'Screen Lock', url: 'screenlock.php'},
					{text: 'Error 404', url: 'error404.php'},
					{text: 'Error 505', url: 'error505.php'},
					{text: 'Blank Page', url: 'blankpage.php'},        		
					{text: 'Profile', url: 'profile.php'}
        		]

         },

         { faicon:'fa-table', url: '#', text: 'Table', tgt: 'table', ddicon:'caret',

        		submenu:[
					{text: 'Basic Table', url: 'basictable.php'},
					{text: 'Data Table', url: 'datatable.php'},
					{text: 'Dynamic Table', url: 'dynamictable.php'}
        		]

         },

         { faicon:'fa-cube', url: '#', text: 'Form', tgt: 'form', ddicon:'caret',

        		submenu:[
					{text: 'Form Layout', url: 'formlayout.php'},
					{text: 'Form Elements', url: 'formelement.php'},
					{text: 'Form validation', url: 'formvalidation.php'}
        		]

         },

         { faicon:'fa-bar-chart-o', url: '#', text: 'Charts', tgt: 'chart', ddicon:'caret',

        		submenu:[
					{text: 'Float chart', url: 'floatchart.php'},
					{text: 'Morris Chart', url: 'morrischart.php'},
					{text: 'Chat js', url: 'chartjs.php'},
					{text: 'AM Chart', url: 'amchart.php'}
        		]

         },

         { faicon:'fa-bars', url: 'panels.php', text: 'Panels'},

         { faicon:'fa-envelope', url: 'mails.php', text: 'Mails'},

         { faicon:'fa-tasks', url: 'tasks.php', text: 'Tasks'}
    ];

});

// Stats
app.controller('stats', function($scope){

	$scope.stats=[
		{icon:'fa-bar-chart-o', bgColor:'skin-red', title:'Today view', total:'223232'},
		{icon:'fa-dollar', bgColor:'skin-sky',title:'Revenew', total:'565545'},
		{icon:'fa-gift', bgColor:'skin-purple',title:'Item Sales', total:'445454'},
		{icon:'fa-shopping-cart', bgColor:'skin-pink',title:'New orders', total:'345456'}
	]

});


// todo
  app.controller('TodoListController', function() {
    
    
    
  });


// client-list
app.controller('clientListController', function($scope) {
    	
  	$scope.data=[
  		{url:'#', bgColor:'skin-red',firstLetter:'V', clientName:'Varun Dev', desg:'Frontend Developer'},
  		{url:'#', bgColor:'skin-pink',firstLetter:'L', clientName:'Levon', desg:'UI/UX Designer'},
  		{url:'#', bgColor:'skin-purple',firstLetter:'Y', clientName:'Yana', desg:'Marketing Manager'},
  		{url:'#', bgColor:'skin-sky',firstLetter:'S', clientName:'Stacy', desg:'HR Admin'},
  		{url:'#', bgColor:'skin-pink',firstLetter:'L', clientName:'Levon', desg:'UI/UX Designer'},
  		{url:'#', bgColor:'skin-purple',firstLetter:'Y', clientName:'Yana', desg:'Marketing Manager'},
  		{url:'#', bgColor:'skin-sky',firstLetter:'S', clientName:'Stacy', desg:'HR Admin'}
  	]

});


app.controller('autoSuggest', function($scope, $http){

	$http.get('js/citydata.json').then(function(response) {
        $scope.data = response.data;
    });

});
