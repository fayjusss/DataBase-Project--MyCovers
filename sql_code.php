<div class="box">
  <div class="content">
    <pre>
      CREATE TABLE IF NOT EXISTS `MyCovers`.`Artists` (
      `artist_id` INT NOT NULL AUTO_INCREMENT,
      `name` VARCHAR(45) NOT NULL,
      PRIMARY KEY (`artist_id`))
      ENGINE = InnoDB;

      CREATE TABLE IF NOT EXISTS `MyCovers`.`Songs` (
      `song_id` INT NOT NULL AUTO_INCREMENT,
      `title` VARCHAR(45) NOT NULL,
      `artist_id` INT NULL,
      `genre` VARCHAR(45) NULL,
      `language` VARCHAR(45) NULL,
      `covered` VARCHAR(4) NULL,
      `lyrics` VARCHAR(200) NULL,
      `chords` VARCHAR(200) NULL,
      `performance_key` VARCHAR(45) NULL,
      PRIMARY KEY (`song_id`),
      INDEX `Artist Key_idx` (`artist_id` ASC),
      CONSTRAINT `Artist Key`
        FOREIGN KEY (`artist_id`)
        REFERENCES `MyCovers`.`Artists` (`artist_id`)
        ON DELETE RESTRICT
        ON UPDATE CASCADE)
        ENGINE = InnoDB;
      </pre>
  </div>
</div>
