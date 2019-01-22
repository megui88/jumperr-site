<?php

namespace App\Http\Controllers\Utils;

use App\Http\Controllers\Controller;
use App\Models\Admin\TagTranslation;
use Illuminate\Http\Request;

class UtilsController extends Controller
{
    public function csvIndex(){
        return view('utils.csv.index');
    }

    public function uploadFile( Request $request ) {
        if ( $request->input( 'submit' ) != null ) {

            $file = $request->file('file');

            // File Details 
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize();
            $mimeType = $file->getMimeType();

            // Valid File Extensions
            $valid_extension = array( "csv" );

            // 2MB in Bytes
            $maxFileSize = 2097152; 

            // Check file extension
            if ( in_array( strtolower( $extension ), $valid_extension ) ) {

	            // Check file size
	            if ( $fileSize <= $maxFileSize ) {

		            // File upload location
		            $location = 'csv';

		            // Upload file
		            $file->move( $location,$filename );

		            // Import CSV to Database
		            $filepath = public_path( $location."/".$filename );

		            // Reading file
		            $file = fopen( $filepath,"r" );

		            $importData = array();
		            $i = 0;

		            while (($filedata = fgetcsv($file, 1000, ";")) !== FALSE) {
			            $num = count($filedata );

			            for ( $c=0; $c < $num; $c++ ) {
			            	$importData[$i][] = $filedata [$c];
			            }

			            $i++;
		            }

		            fclose( $file );

		            // Insert to database
		            foreach( $importData as $data ) {
		            	// Español
		            	$tag = new TagTranslation([
					        'tag'		  => $data[0],
					        'value' 	  => $data[1],
					        'language_id' => 3
		            	]);
		            	$tag->save();

		           //  	// Ingles
		           //  	$tag = new TagTranslation([
					        // 'tag' 		  => $data[0],
					        // 'value' 	  => $data[2],
					        // 'language_id' => 2
		           //  	]);
		           //  	$tag->save();

		           //  	// Italiano
		           //  	$tag = new TagTranslation([
					        // 'tag' 		  => $data[0],
					        // 'value' 	  => $data[3],
					        // 'language_id' => 1
		           //  	]);
		           //  	$tag->save();

		           //  	// Portugues
		           //  	$tag = new TagTranslation([
					        // 'tag' 		  => $data[0],
					        // 'value' 	  => $data[4],
					        // 'language_id' => 4
		           //  	]);
		           //  	$tag->save();

		           //  	// Frances
		           //  	$tag = new TagTranslation([
					        // 'tag' 		  => $data[0],
					        // 'value' 	  => $data[5],
					        // 'language_id' => 5
		           //  	]);
		           //  	$tag->save();
		            }

		            Session::flash('message','Import Successful.');
	            } else {
	            	Session::flash('message','File too large. File must be less than 2MB.');
	            }
            } else {
            	Session::flash('message','Invalid File Extension.');
            }

        }

        // Redirect to index
        return redirect()->action('PagesController@index');
    }
}
