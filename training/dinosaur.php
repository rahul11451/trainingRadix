<?php
// gravitational constant
define('G', 9.8);

$result = array();


require_once 'vendor/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

$res = $res1 = $res2 = $res3 = $keyArr = $keyArr1 = $dataset1 = $dataset2 = array();
try {
    $filePath = getcwd() . '/dataset1.ods';

    $reader = ReaderEntityFactory::createReaderFromFile($filePath);

    $reader->open($filePath);

    foreach ($reader->getSheetIterator() as $sheet) {
        foreach ($sheet->getRowIterator() as $key => $row) {
            $cells = $row->getCells();
            foreach ($cells as $ke => $cell) {
                $rowData =  $cell->getValue();
                    if($ke == 0){
                        array_push($res1, $rowData);
                    } else if($ke == 1) {
                        $keyArr['legLength'] = $rowData;
                    } else {
                        $keyArr['diet'] = $rowData;
                        array_push($res, $keyArr);
                    }
                $dataset1 = array_combine($res1, $res);

            }
        }
    }
    $reader->close();
} catch (Exception $e) {
    echo $e->getMessage();
}

// dataset2
try {
    $filePath = getcwd() . '/dataset2.ods';

    $reader = ReaderEntityFactory::createReaderFromFile($filePath);

    $reader->open($filePath);

    foreach ($reader->getSheetIterator() as $sheet) {
        foreach ($sheet->getRowIterator() as $key => $row) {
            $cells = $row->getCells();
            foreach ($cells as $ke => $cell) {
                $rowData =  $cell->getValue();
                    if($ke == 0){
                        array_push($res2, $rowData);
                    } else if($ke == 1) {
                        $keyArr1['strideLength'] = $rowData;
                    } else {
                        $keyArr1['stance'] = $rowData;
                        array_push($res3, $keyArr1);
                    }
                $dataset2 = array_combine($res2, $res3);

            }
        }
    }
    $reader->close();
} catch (Exception $e) {
    echo $e->getMessage();
}
foreach($dataset1 as $key => $value) {
    if($dataset2[$key]['stance'] == 'bipedal') {
         $speed = (($dataset2[$key]['strideLength'] / $dataset1[$key]['legLength']) - 1) * sqrt($dataset1[$key]['legLength'] * G);
        
        $result[$key] = $speed;
    }
}
arsort($result);
echo '<br>Nensi<br>File: '. __FILE__.'<br>Line: '.__LINE__.'<br><pre>';print_r($result);echo '</pre>'; 


