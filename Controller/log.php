<?php

    class log{
        public function logTimeLine(){
            fopen('register.log', 'a+');
        }
    }