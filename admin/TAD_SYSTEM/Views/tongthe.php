<div class="row">
    <div class="col-lg-12">
        <div class="block block-rounded">
            <div class="block-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                            <th>#</th>
                                <th>USER</th>
                                <th>STATUS</th>
                                <th>TELCO</th>
                                <th>PIN</th>
                                <th>SERIAL</th>
                                <th>AMOUNT</th>
                                
                                <th>TIME</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0;
                                $card_query = $tad->db_query("SELECT * FROM `napthe` ORDER BY `id` DESC ");
                                while($card = mysqli_fetch_assoc($card_query)) {
                            ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td>
                                    <?= $card['nguoinap']; ?>
                                </td>
                                <td>
                                    <?= $tad->trangthaithe($card['trangthai']); ?>
                                </td>
                                <td>
                                    <?= ($card['loaithe']); ?>
                                </td>
                                <td>
                                <?= $card['mathe']; ?>
                                  
                                </td>
                                <td>
                                    <?= $card['seri']; ?>
                                </td>
                               <td>
                               <?= number_format($card['menhgia']); ?>đ
                               </td>
                               
                                <td>
                                    <?= $card['time']; ?>
                                </td>
                            </tr>
                           
                            
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>