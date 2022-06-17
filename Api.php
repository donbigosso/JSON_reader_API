<?php
    include 'DataModifier.php';
    include 'FileWriter.php';
    include 'DataFetcher.php';
    try {
        $df = new DataFetcher;
        $fr = new FileWriter($df->return_filename());
        $dm = new DataModifier($fr->load_file());
        //$df->print_data();
        print_r ($dm-> change_whole_index($df->return_index(), $df->return_entry()));
    }
    catch(Exception $e){
        echo 'Server error: ', $e->getMessage(), " ";
      }
?>