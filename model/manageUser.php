<?php
function handleUser()
{
        require "./db_connect/detection.php";
        $sql = "SELECT* FROM utilisateurs";
        $req = $link->query($sql); ?>
        <table class="table table-dark table-striped">
                <thead>
                <tr>
                    <th colspan="1" class="text-center">id utilisateur</th>
                    <th colspan="1">pseudo</th>
                    <th colspan="1">Adresse mail</th>
                    <th colspan="1">Email vérifié</th>
                    <th colspan="1">Manage</th>
                </tr>
                </thead>
                <tbody>
        <?php while ($data = $req->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr class="row<?= $data["id_utilisateur"];?>">
                        <td class="text-center"><?= $data["id_utilisateur"]; ?></td>
                        <td><?= $data["pseudo"];?></td>
                        <td><?= $data["login"]; ?></td>
                        <td><?php if($data["user_check"]==1){ 
                           echo" ✅";
                        }else{ 
                           echo "❌";
                        } ?></td>
                        <td><button class="btn btn-danger btnDell" id="<?= $data["id_utilisateur"];?>"><img src="./public/img/bin.svg" alt="dell the user">dell the user</button><br><br>
                       <?php if($data["canComment"]==1){ ?>
                            <button class="btn btn-info btnCom" id="<?= $data["id_utilisateur"];?>"data-comment = true><img src="./public/img/canComment.svg" alt="the user can comment"> can comment</button>
                        <?php }else{ ?>
                            <button class="btn btn-info btnCom" id="<?= $data["id_utilisateur"];?>" data-comment=false><img src="./public/img/cantComment.svg" alt="the user can't comment"> can't comment</button>
                     <?php   } ?></td>
                    </tr>
                
    <?php } ?>
    </tbody>
    </table>
    <?php
}
