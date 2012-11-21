<?php



    class HtmlFactory{
    
        static public function object_create_view_from_a_model($model_name){

            $form_action_url = Url($_GET['header'],'do_create_'.$model_name);
echo <<<HTML
<table cellpadding=3 cellspacing=0 border=0 bgcolor="#E1E1E1" style="padding:28px 100px;">
<tr>
<td bgcolor="#00438C" style="padding: 3px;" colspan="100">
    <table width="100%" cellpadding="0" cellspacing="0">
    <tr>
    <td bgcolor="#00438C" class="textHeaderDark"><strong>Create a new $model_name</strong> </td>
    </tr>
    </table>
</td>
</tr>
<tr style='display:none;'><td><form method='post' autocomplete='off' action='$form_action_url' name='chk'></td></tr>
<tr id='row_host_header' bgcolor='#6d88ad'><td colspan='2' class='tableSubHeaderColumn'>General $model_name Options</td></tr>
                
HTML;
            $model = M($model_name);
            foreach($model  as $field => $attrs){
                HtmlFactory::draw_one_html_tag_on_create_view($field,$attrs);
            
            }

        
        }

        static public function object_list_view_from_a_modle($model_name){
        
        
        }

        
        static public function draw_one_html_tag_on_create_view($tag_name,$attrs){
        
            $color = HtmlFactory::getColor();
            switch($attrs['type']){
                case VN_STRING:
                case VN_IP:
echo <<<HTML
<tr bgcolor='$color'>
    <td width='50%'><font class='textEditTitle'>{$tag_name}</font><br>{$attrs['note']}</td>
    <td><input type='text'  name='{$tag_name}' size='40' maxlength='250' value='{$attrs['default']}'></td>
</tr>

HTML;
                    break;

                

                case VN_HOST_TEMPLATE:
                    $ds = new DS();
                $all_host_template = $ds -> get_all_object('host_template');
echo <<<HTML
<tr  bgcolor='$color'>
    <td width='50%'><font class='textEditTitle'>{$tag_name}</font><br>{$attrs['note']}</td>
    <td>
HTML;
                if(is_array($all_host_template) && count($all_host_template) != 0){
echo <<<HTML
    <select id='host_template_id' name='$tag_name'>
HTML;
                    foreach($all_host_template as $host_template){
echo <<<HTML
<option value='$host_template'>$host_template</option>
HTML;
                    }
echo <<<HTML
    </select>
    </td>
</tr>
HTML;
                }else{

            echo '<a href="'.Url($_GET['header'],'create_host_template').'">There is not Host Template!Pleace add one!</a>';
}
                break;

                case VN_BOOL:
echo <<<HTML
<tr  bgcolor='$color'>
    <td width='50%'><font class='textEditTitle'>{$tag_name}</font><br>{$attrs['note']}</td>
    <td>
        <select id='host_template_id' name='$tag_name'>
            <option value='1'>Enable</option>
            <option value='0'>Disable</option>
        </select>
    </td>
</tr>
HTML;

                break;
                case VN_CONSTANT:
echo <<<HTML
<tr  bgcolor='$color'>
    <td width='50%'><font class='textEditTitle'>{$tag_name}</font><br>{$attrs['note']}</td>
    <td>{$attrs['default']}</td>
</tr>
HTML;
                break;

                default:
echo <<<HTML
<tr bgcolor='$color'>
    <td width='50%'><font class='textEditTitle'>{$tag_name}</font><br>{$attrs['note']}</td>
    <td>I am unknow html type!</td>
</tr>
HTML;
            
            
            
            }
        
        }

    public static function getColor(){

        static $color = '#E5E5E5';
        if($color == '#E5E5E5'){
        $color = '#F5F5F5';
        }
        return $color;
    } 
    
    
}

?>
