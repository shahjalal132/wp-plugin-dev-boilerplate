<?php 

$base_url = site_url() . '/wp-json/api/v1';

?>

<h4 class="common-title">Endpoints</h4>

<div class="endpoints-wrapper">
    <table class="endpoints-table">
        <thead>
            <tr>
                <th>Endpoint</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $base_url ?>/health</td>
                <td>Apis Health Check</td>
                <td><button class="copy-button">Copy</button></td>
            </tr>
        </tbody>
    </table>
</div>