<?php
	function text_limit($str,$limit)
		{
			$str_s = "";
			if(stripos($str," ")){
				$ex_str = explode(" ",$str);
				if(count($ex_str)>$limit){
					for($i=0;$i<$limit;$i++){
						$str_s.=$ex_str[$i]." ";
					}
					$str_s = $str_s."...";
					return $str_s;
				}
				else{
					return $str;
				}
			}
			else{
				return $str;
			}
		}
?>