<div class="hero-body">
  <div class="container has-text-centered">
    <h4 class="title is-4">Songs</h4>
    <table class="table is-striped" border="1">
      <thead>
        <tr>
          <TH>Title</TH><TH>Artist</TH><TH>Genre</TH><TH>Language</TH><TH>Lyrics</TH><TH>Chords</TH><TH>Key</TH><TH>Edit</TH><TH>Delete</TH>
        </tr>
      </thead>

    <tbody>
      <?php
      include "connection.php";
      $myquery="SELECT songs.*, Artists.name FROM songs INNER JOIN Artists ON songs.artist_id = Artists.artist_id";
      $songs_data=$db->query($myquery);

      foreach ($songs_data as $song) {
        echo '<tr><td>'.$song['title'].'</td><td>'.$song['name'].'</td><td>'.$song['genre'].'</td><td>'.$song['language'].'</td><td>'.'<a class="fa fa-external-link" target="_blank" href='.$song['lyrics'].'></a>'.'</td><td>'.'<a class="fa fa-external-link" target="_blank" href='.$song['chords'].'></a>'.'</td><td>'.$song['performance_key'].'</td>';
        echo '<td><a href="update_customer.php?id='.$song['song_id'].'"><a href="add_song.php" class="button is-primary is-outlined">Update</a></a></td>';
        echo '<td><a href="delete_customer.php?id='.$song['song_id'].'"><a href="add_song.php" class="button is-danger is-outlined">Delete</a></a></td>';
        echo '</tr>';
      }
      ?>
      </table>
    </tbody>
  </div>
</div>
