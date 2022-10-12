<!-- 
In MVC framework, the letter “V” stands for Views.Views are stored in resources/views directory.
 Generally, the view contains the HTML which will be served by the application.
 1). In the view file we add data which is shown for the user like index page , update page etcs. 
In simple which data is displayed in the front of the user write in the view file with blade.php.
2). if you want to create a view file then go to view and create a file with blade file like  index.blade.php.
3). Add the following line in the app/Http/routes.php file to set the route for the above view. app/Http/routes.php
Route::get('/index', function() {
return view('index');
});
4). In view files we add data shown in frant like indax page & edit page etcs.
 5). Then call these files in the controller .
-->