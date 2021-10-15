<?php
require 'generate.php';
    $elements=[
    0=>[
        'tag'=>'input',
        'text'=>'姓  名:',
        'attr'=>[
            'type'=>'text',
            'name'=>'user'
        ]
    ],
    1=>[
        'tag'=>'input',
        'text'=>'性别',
        'attr'=>[
            'type'=>'radio',
            'name'=>'gender'
        ],
        'option'=>[
            'm'=>'男',
            'w'=>'女'
        ]
    ],
    2=>[
        'tag'=>'input',
        'text'=>'爱好',
        'attr'=>[
            'type'=>'checkbox',
            'name'=>'hobby[]'
        ],
        'option'=>[
            'swimming'=>'游泳',
            'reading'=>'读书',
            'running'=>'跑步'
        ],
        'default'=>[
            'swimming',
            'reading'
        ]
    ],
    3=>[
        'tag'=>'select',
        'text'=>'住址',
        'attr'=>[
            'name'=>'area',
        ],
        'option'=>[
            ''=>'---请选择---',
            'BJ'=>'北京',
            'SH'=>'上海',
            'SZ'=>'深圳'
        ]
    ],
    4=>[
        'tag'=>'textarea',
        'text'=>'自我介绍',
        'attr'=>[
            'name'=>'introduce',
            'cols'=>50,
            'row'=>5
        ]
    ],
    5=>[
        'tag'=>'input',
        'attr'=>[
            'type'=>'submit',
            'value'=>'提交'
        ]
    ]
];



// var_dump($a);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>个人信息</div>
    <div><?=generate($elements) ?></div>
</body>
</html>