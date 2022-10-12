<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
// 2.) XAMPP Installation:-
// Step 1: Download:-
// Versions with PHP 5.5, 5.6, or 7 are available for download.
// Step 2: Run .exe file:-
// Once the software bundle has been downloaded, you can start the installation by double clicking on the file with the ending .exe.
// Step 3: Deactivate any antivirus software:-
// Since an active antivirus program can negatively affect the installation process, it’s recommended to temporarily pause any antivirus software until all XAMPP components have successfully been installed.

// Before installing XAMPP, it is advisable to disable the anti-virus program temporarily
// Step 4: Deactivate UAC:-
// User Account Control (UAC) can interfere with the XAMPP installation because it limits writing access to the C: drive.

// User account control can affect the installation of XAMPP
// Step 5: Start the setup wizard:-
// the start screen of the XAMPP setup wizard should appear automatically. Click on ‘Next’ to configure the installation settings.

// You can start the setup on the startup screen
// Step 6: Choose software components:-
// Under ‘Select Components’, you have the option to exclude individual components of the XAMPP software bundle from the installation. But for a full local test server, we recommend you install using the standard setup and all available components. After making your choice, click ‘Next’.

// In the dialog window entitled 'select components', you can choose the software components before installation
// Step 7: Choose the installation directory:-
// you have the chance to choose where you’d like the XAMPP software packet to be installed. If you opt for the standard setup, then a folder with the name XAMPP will be created under C:\ for you. After you’ve chosen a location, click ‘Next’.

// For the next step, you need to select the directory where XAMPP should be installed
// Step 8: Start the installation process:-
// Installation has started. According to the default settings, the selected software components are unpacked and installed in the target folder.

// Step 9: Complete installation:-
// Once all the components are unpacked and installed, you can close the setup wizard by clicking on ‘Finish’.

// By clicking on 'finish', the XAMPP Setup Wizard is completed
// Step 9.)Connection:-
// Before starting a project on localhost connect (start)Apache and MySQL.

