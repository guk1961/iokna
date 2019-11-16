<!--<h1>show action</h1>-->
<?php
    //$this->registerJsFile('@web/js/myscripts.js', ['depends'=>'yii\web\YiiAsset']);
    //$this-> registerJs ( "$('p').append('<p>777777777777777777777777</p>')", yii\web\View::POS_LOAD);
    //$this-> registerCss ( 'p(backcolor: #ccc)');
//    debug($cats);
    // echo '<br>'. count($cats->product);
    // debug($cats);
    echo  '<ul>' ;
    foreach($cats as $cat){
        // echo $cat->id . '/' . $cat->title . '/' . $cat->alias .'<br>';
        // echo  $cat['pid'] . '/' . $cat['id'] . '/' . $cat['title'] . '/' . $cat['alias'] .'<br>';
            echo  '<li>' . $cat['id'] . ' / ' . $cat['title'];
            echo  '<ul>' ;
            $prods = $cat->product;
            foreach ($prods as $product){
                echo  '<li>' . $product['category_id'] .' / '. $product['id'] . ' / ' . $product['title'];
            }
            echo  '</ul>' ;
        }
    echo  '</ul>' ;
?>
<button class="btn btn-siccess" id="btnok">OK</button>

<?php

$js = <<<JS
    $('#btnok').on('click', function(){
        $.ajax({
            url:'index.php?r=post/index',
            data: {test:'1234567'},
            type:'POST',
            success: function(res){
                console.log(res);
            },
            error: function(){
                alert('Error!');
            }
        })
    });

JS;
$this -> registerJs($js);
?>