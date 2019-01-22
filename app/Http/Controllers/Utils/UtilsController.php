<?php

namespace App\Http\Controllers\Utils;

use App\Http\Controllers\Controller;
use App\Models\Admin\TagTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

		            while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
			            $num = count($filedata );

			            for ( $c=0; $c < $num; $c++ ) {
			            	$importData[$i][] = $filedata [$c];
			            }

			            $i++;
		            }

		            fclose( $file );

		            $languages = array( 
		            				'Italiano'  => 1, 
		            				'Ingles'    => 2,
		            				'Español'   => 3,
		            				'Portugues' => 4,
		            				'Frances'   => 5
		            			);

		            // Insert to database
		            foreach( $importData as $data ) {

						$this->saveTag( $data[3], $data[5], $languages['Español'] );
						$this->saveTag( $data[3], $data[6], $languages['Italiano'] );
						$this->saveTag( $data[3], $data[7], $languages['Ingles'] );
						$this->saveTag( $data[3], $data[8], $languages['Portugues'] );
						$this->saveTag( $data[3], $data[9], $languages['Frances'] );
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
        return response()->json('Successful');
    }

    public function saveTag( $tag, $value, $language ) {
    	if ( TagTranslation::where( 'tag', $tag )->where( 'language_id', $language )->count() == 0 ) {
	    	$tag = new TagTranslation([
					'tag' 		  => $tag,
					'value' 	  => $value,
					'language_id' => $language
				]);
			return $tag->save();
    	}
    }   

    public function getAllTags() {
    	return TagTranslation::all();
    }   
}
