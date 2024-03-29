<?php
/**
 * Ar default public config file.
 *
 * @author hellcox <hellcox@163.com>
 */
return array(
    'moduleLists' => array(
        'main',
    ),
    //上传目录
    'UPLOAD_DIR' => AR_ROOT_PATH . 'Public' . DS . 'Upload' . DS,
    //扩展目录
    'EXTENSION_DIR' => AR_ROOT_PATH . 'main' . DS . 'Ext' . DS,
    //开启/关闭trace(调试信息)显示
    'DEBUG_SHOW_TRACE' => false,
    //组件配置
    'components' => array(
        //懒惰加载
        'lazy' => TRUE,
        'db' => array(
        	//懒惰加载
            'lazy' => TRUE,
            // mysql数据库组件
            'mysql' => array(
                'config' => array(
                    // 读库
                    'read' => array(
                        // 默认读库配置
                        'default' => array(
                            'dsn' => 'mysql:host=127.0.0.1;dbname=blog;port=3306',
                            'user' => 'root',
                            'pass' => '111111',
                            'prefix' => 'blog_',//表前缀
                            'option' => array(
                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
                                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
                            ),
                        ),
                    ),
                ),
            ),
        ),//db配置结束
	),//components配置结束
);