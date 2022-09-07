<?php
include ('../classpath.php');
    class Frontend extends DatabaseQuery{
        
        function loop($data){
            $result = '';
            foreach($data as $key => $value){
                $result .= '<div class="col-6 mb-5">
                <a href="hotelDetail.php?id='.$data[$key]['hotel_id'].'" class="text-decoration-none text-black cursor">
                <div class="card h-100 shadow-lg">
                <div class="h-75">
                <img src="'.NENSI.$data[$key]['hotel_id'].'/'.$data[$key]['small_pic'].'" class="card-img-top img-fluid h-100" alt="img">
                </div>
                <div class="card-body">
                <h5 class="card-title">Name: '.$data[$key]['hotel_title'].'</h5>
                <p class="card-text">Short Description: '.$data[$key]['short_desc'].'</p>
                <p class="card-text">Hotel Star: '.$data[$key]['hotel_star'].'</p>
                <p class="card-text">Room Type: '.$data[$key]['room_type'].'</p>
                </div>
                </div>
                </a>
                </div>';
            }
            return $result;
        }
    }
