<?php

namespace MapGenerator;

interface MapGenerator
{

    public function generate( $iNbLine, $iNbColumn);

    public function current( $iLine, $iColumn);

    public function prev( $iLine, $iColumn);

    public function next( $iLine, $iColumn);

    public function topLeft( $iLine, $iColumn);

    public function topRight( $iLine, $iColumn);
    
    public function bottomLeft( $iLine, $iColumn);

    public function bottomRight( $iLine, $iColumn);

}
