<div class="box">
  <div class="content">
    <p>In Songs-table artist_id is a foreign key.</p>
    <p>We don’t allow to delete artist from Artists-table, if they have song in Songs-table.</p>
    <p>DELETE-rule = <strong>RESTRICT</strong></p>
    <p>If we update artist_id value in Artists-table, it will update the values automatically on Songs-table</p>
    <p>UPDATE-rule = <strong>CASCADE</p>
  </div>
</div>
