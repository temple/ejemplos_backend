<?php

if ($curso->has('css')){
	apuntarmeAlCurso();
}else{
	if ($curso->has('php')){
		apuntarmeAlCurso();
	}
	else{
		if ($curso->has('centos')){
			apuntarmeAlCurso();
		}
	}
}

if ($curso->has('css')){
	apuntarmeAlCurso();
}elseif($curso->has('php')){
	apuntarmeAlCurso();
}elseif($curso->has('centos')){
	apuntarmeAlCurso();
}



