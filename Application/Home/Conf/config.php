<?php
// +----------------------------------------------------------------------
// | OpenCMF [ Simple Efficient Excellent ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.lingyun.net All rights reserved.
// +----------------------------------------------------------------------
// | Author: jry <598821125@qq.com>
// +----------------------------------------------------------------------
return array(
    // 路由配置
    'URL_ROUTER_ON'   => true,
    'URL_MAP_RULES'   => array(
    ),
    'URL_ROUTE_RULES' => array(
        'p/:id\d' => 'index/page',
    ),
);
