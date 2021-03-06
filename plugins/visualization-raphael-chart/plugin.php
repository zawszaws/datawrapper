<?php

class DatawrapperPlugin_VisualizationRaphaelChart extends DatawrapperPlugin_Visualization {

    public function getMeta() {
        return array(
            "id" => "raphael-chart",
            "libraries" => array(
                array(
                    "local" => "vendor/d3-light.min.js",
                    "cdn" => "//assets-datawrapper.s3.amazonaws.com/vendor/d3-light/3.1.7/d3-light.min.js"
                ),
                array(
                    "local" => "vendor/chroma.min.js",
                    "cdn" => "//assets-datawrapper.s3.amazonaws.com/vendor/chroma-js/0.4.13/chroma.min.js"
                ),
                array(
                    "local" => "vendor/raphael-2.1.0.min.js",
                    "cdn" => "//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"
                )
            )
        );
    }
}