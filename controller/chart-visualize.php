<?php


require_once '../lib/utils/themes.php';

/*
 * VISUALIZE STEP
 */
$app->get('/chart/:id/visualize', function ($id) use ($app) {
    disable_cache($app);

    check_chart_writable($id, function($user, $chart) use ($app) {
        $page = array(
            'chartData' => $chart->loadData(),
            'chart' => $chart,
            'visualizations' => DatawrapperVisualization::all('dependencies'),
            'vis' => DatawrapperVisualization::get($chart->getType()),
            'themes' => DatawrapperTheme::all(),
            'theme' => DatawrapperTheme::get($chart->getTheme()),
            'debug' => !empty($GLOBALS['dw_config']['debug_export_test_cases']) ? '1' : '0'
        );
        add_header_vars($page, 'chart');
        add_editor_nav($page, 3);

        $app->render('chart-visualize.twig', $page);
    });
});

