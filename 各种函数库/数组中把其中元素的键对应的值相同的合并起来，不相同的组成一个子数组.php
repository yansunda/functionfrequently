array (size=13)
  0 => 
    array (size=4)
      'attr_id' => string '1' (length=1)
      'attr_value' => string 'f' (length=1)
      'attr_name' => string '网络制式' (length=12)
      'attr_is_sel' => string '0' (length=1)
  1 => 
    array (size=4)
      'attr_id' => string '2' (length=1)
      'attr_value' => string '2' (length=1)
      'attr_name' => string '尺寸体积' (length=12)
      'attr_is_sel' => string '0' (length=1)
  2 => 
    array (size=4)
      'attr_id' => string '3' (length=1)
      'attr_value' => string '12' (length=2)
      'attr_name' => string '内存' (length=6)
      'attr_is_sel' => string '0' (length=1)
  3 => 
    array (size=4)
      'attr_id' => string '4' (length=1)
      'attr_value' => string '1' (length=1)
      'attr_name' => string '长度' (length=6)
      'attr_is_sel' => string '0' (length=1)
  4 => 
    array (size=4)
      'attr_id' => string '5' (length=1)
      'attr_value' => string '1' (length=1)
      'attr_name' => string '宽度' (length=6)
      'attr_is_sel' => string '0' (length=1)
  5 => 
    array (size=4)
      'attr_id' => string '8' (length=1)
      'attr_value' => string '1' (length=1)
      'attr_name' => string '容量' (length=6)
      'attr_is_sel' => string '0' (length=1)
  6 => 
    array (size=4)
      'attr_id' => string '9' (length=1)
      'attr_value' => string 'Android' (length=7)
      'attr_name' => string '操作系统' (length=12)
      'attr_is_sel' => string '1' (length=1)
  7 => 
    array (size=4)
      'attr_id' => string '9' (length=1)
      'attr_value' => string 'ios' (length=3)
      'attr_name' => string '操作系统' (length=12)
      'attr_is_sel' => string '1' (length=1)
  8 => 
    array (size=4)
      'attr_id' => string '9' (length=1)
      'attr_value' => string 'windows' (length=7)
      'attr_name' => string '操作系统' (length=12)
      'attr_is_sel' => string '1' (length=1)
  9 => 
    array (size=4)
      'attr_id' => string '10' (length=2)
      'attr_value' => string '蓝色' (length=6)
      'attr_name' => string '颜色' (length=6)
      'attr_is_sel' => string '1' (length=1)
  10 => 
    array (size=4)
      'attr_id' => string '10' (length=2)
      'attr_value' => string '绿色' (length=6)
      'attr_name' => string '颜色' (length=6)
      'attr_is_sel' => string '1' (length=1)
  11 => 
    array (size=4)
      'attr_id' => string '10' (length=2)
      'attr_value' => string '白色' (length=6)
      'attr_name' => string '颜色' (length=6)
      'attr_is_sel' => string '1' (length=1)
  12 => 
    array (size=4)
      'attr_id' => string '13' (length=2)
      'attr_value' => string 'intel' (length=5)
      'attr_name' => string '处理器类型' (length=15)
      'attr_is_sel' => string '0' (length=1)


比如有如上的数组，我想把字段attr_id 的值相同的合并为一个数组，不相同的就是原字段的数组。
解决核心办法：观察数组，发现可以用attr_id作为新数组的键，那么原来的数组中相同的部分会被覆盖掉
 
 设：$attrinfo 就是上面的数组。

  $tmp = array();
  foreach($attrinfo as $k => $v)
  {
      if(!empty($tmp[$v['attr_id']]) || $v['attr_is_sel']==1)
      {
          //多选属性整合
          $tmp[$v['attr_id']]['attr_id'] = $v['attr_id'];
          $tmp[$v['attr_id']]['attr_name'] = $v['attr_name'];
          $tmp[$v['attr_id']]['attr_is_sel'] = $v['attr_is_sel'];
          $tmp[$v['attr_id']]['attr_sel_opt'] = $v['attr_sel_opt'];
          $tmp[$v['attr_id']]['attr_value'][] = $v['attr_value'];
      }
      else
      {
          //单选属性整合
          $tmp[$v['attr_id']] = $v; 
      }
  }