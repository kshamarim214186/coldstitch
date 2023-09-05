<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Paging cell
 */
class PagingCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
     
    public function display($pagenumber,$total,$table,$link2,$PerPageRecord=false,$type=false){
        //echo $type;
        if($link2!='null') { 
            $link= ROOT_PATH.$table.$link2;  
            $per_page = $PerPageRecord;
        } else { 
            $link=ROOT_PATH.$table; 
            $per_page = 6;
        }
        
        if($pagenumber!=0 and $pagenumber!=-1){
            $page = $pagenumber;
        }else{ 
            $page = 1; 
        }
			
		$cur_page = $page;
		$page -= 1;
		$previous_btn = true;
		$next_btn = true;
		$first_btn = true;
		$last_btn = true;
		$start = $page * $per_page;
		$msg='';
		$goto ='';
		$total_string ='';
		$count = $total;
		$no_of_paginations = ceil($count / $per_page);
		
		if ($cur_page >= 7) {
			$start_loop = $cur_page - 3;
			if ($no_of_paginations > $cur_page + 3)
			$end_loop = $cur_page + 3;
			else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
			$start_loop = $no_of_paginations - 6;
			$end_loop = $no_of_paginations;
			} else {
			$end_loop = $no_of_paginations;
			}
		} else {
			$start_loop = 1;
			if ($no_of_paginations > 7)
			$end_loop = 7;
			else
			$end_loop = $no_of_paginations;
		}
		/* ----------------------------------------------------------------------------------------------------------- */
		$msg .= "<nav aria-label='Page navigation example'><ul class='pagination'>";
		if ($first_btn && $cur_page > 1) {
		    $msg .= "<li class='page-item' p='1'><a class='page-link' rel='noindex, follow' href='".$link."'>First</a></li>";
		} else if ($first_btn) {
		    $msg .= "<li p='1' class='disabled page-item'><a rel='noindex, follow' class='page-link'>First</a></li>";
		}
		
		if ($previous_btn && $cur_page > 1) {
			$pre = $cur_page - 1;
			if($pre==1){
			    $msg .= "<li class='page-item' p='$pre'><a class='page-link' rel='noindex, follow' href='".$link."/'>Previous</a></li>"; 
			}else {
			    if($type){
		            $msg .= "<li class='page-item' p='$pre'><a class='page-link' rel='noindex, follow' href='".$link."/?page=$pre&type=$type'>Previous</a></li>";
		        }else{
			        $msg .= "<li class='page-item' p='$pre'><a class='page-link' rel='noindex, follow' href='".$link."/?page=$pre'>Previous</a></li>";
			    }
			}
		} else if ($previous_btn) {
		    $msg .= "<li class='disabled page-item'><a class='page-link'>Previous</a></li>";
		}
		
		for ($i = $start_loop; $i <= $end_loop; $i++) {
			if ($cur_page == $i) {
    			if ($cur_page == 1){
    			    $msg .= "<li p='$i' class='active page-item'><a class='page-link' rel='noindex, follow' href='".$link."/'>{$i}</a></li>";
    			}else {
    			    if($type){
			            $msg .= "<li p='$i' class='active page-item'><a class='page-link' rel='noindex, follow' href='".$link."/?page=$i&type=$type'>{$i}</a></li>";
			        }else{
    			        $msg .= "<li p='$i' class='active page-item'><a class='page-link' rel='noindex, follow' href='".$link."/?page=$i'>{$i}</a></li>";
    			    }
    			}
			}else { 
			    if($type){
			        $msg .= "<li class='page-item' p='$i'><a class='page-link' rel='noindex, follow' href='".$link."/?page=$i&type=$type'>{$i}</a></li>";
			    }else{
			        $msg .= "<li class='page-item' p='$i'><a class='page-link' rel='noindex, follow' href='".$link."/?page=$i'>{$i}</a></li>";
    			}
			}
		}
		
		if ($next_btn && $cur_page < $no_of_paginations) {
			$nex = $cur_page + 1;
			if($type){
		        $msg .= "<li class='page-item' p='$nex'><a class='page-link' rel='noindex, follow' href='".$link."/?page=$nex&type=$type'>Next</a></li>";
		    }else{
			    $msg .= "<li class='page-item' p='$nex'><a class='page-link' rel='noindex, follow' href='".$link."/?page=$nex'>Next</a></li>";
			}
		} else if ($next_btn) {
		    $msg .= "<li class='disabled page-item'><a rel='noindex, follow' class='page-link'>Next</a></li>";
		}
		
		if ($last_btn && $cur_page < $no_of_paginations) {
		    if($type){
		        $msg .= "<li class='page-item' p='$no_of_paginations'><a class='page-link' rel='noindex, follow' href='".$link."/?page=$no_of_paginations&type=$type'>Last</a></li>";
		    }else{
		        $msg .= "<li class='page-item' p='$no_of_paginations'><a class='page-link' rel='noindex, follow' href='".$link."/?page=$no_of_paginations'>Last</a></li>";
		    }
		} else if ($last_btn) {
		    $msg .= "<li p='$no_of_paginations' class='disabled page-item'><a class='page-link'>Last</a></li>";
		}
		
		$msg = $msg . "</ul></nav>" . $goto . $total_string;
		$this->set('paging',$msg); 
    }	
}
