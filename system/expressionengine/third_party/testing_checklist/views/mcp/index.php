<?php
    $tests = array(
            'Admin check',
            'Admin permission check'
            );
?>



<div style="padding:10px 20px">
<li><a href="<?=$run_test?>" class="pop" title="pop">Run test</a></li>
  <table>
        <thead>
          <tr>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            <?php
                foreach($tests as $test):
            ?>
                    <tr>
                        <td style="font-size: 15px;"><?php echo $test ?></td>
                    </tr>
            <?php
                endforeach;
            ?>
        </tbody>
  </table>
</div>



<?php //echo $this->view('mcp/_footer'); ?>