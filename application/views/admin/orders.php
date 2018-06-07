<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">Orders</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <?php if (empty($list)): ?>
                            <p>There are no orders</p>
                        <?php else: ?>
                            <table class="table">
                                <tr>
                                    <th>Order id</th>
                                    <th>Login</th>
                                    <th>Email</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Count</th>
                                    <th>Total price</th>
                                </tr>
                                <?php foreach ($list as $val): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($val['id'], ENT_QUOTES); ?></td>
                                        <td><?php echo htmlspecialchars($val['login'], ENT_QUOTES); ?></td>
                                        <td><?php echo htmlspecialchars($val['email'], ENT_QUOTES); ?></td>
                                        <td><?php echo htmlspecialchars($val['title'], ENT_QUOTES); ?></td>
                                        <td><?php echo htmlspecialchars($val['price'], ENT_QUOTES); ?></td>
                                        <td><?php echo htmlspecialchars($val['count'], ENT_QUOTES); ?></td>
                                        <td><?php echo $val['price'] * $val['count']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                            <?php echo $pagination; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>