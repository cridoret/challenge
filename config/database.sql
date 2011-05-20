-- -----------------------------------------------------
-- Table `mydb`.`persons`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`persons` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  `birth_date` DATE NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`students`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`students` (
  `student_id` VARCHAR(9) NOT NULL ,
  `gender` VARCHAR(1) NULL ,
  `person_id` INT NOT NULL ,
  UNIQUE INDEX `student_id_UNIQUE` (`student_id` ASC) ,
  PRIMARY KEY (`student_id`, `person_id`) ,
  INDEX `student_person_id_fk` (`person_id` ASC) ,
  CONSTRAINT `student_person_id_fk`
    FOREIGN KEY (`person_id` )
    REFERENCES `mydb`.`persons` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`teachers`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`teachers` (
  `teacher_id` INT NOT NULL ,
  `title` VARCHAR(10) NULL ,
  `person_id` INT NOT NULL ,
  PRIMARY KEY (`teacher_id`, `person_id`) ,
  INDEX `teacher_person_id` (`person_id` ASC) ,
  CONSTRAINT `teacher_person_id`
    FOREIGN KEY (`person_id` )
    REFERENCES `mydb`.`persons` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`classses`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`classses` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`teachers_classes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`teachers_classes` (
  `teacher_id` INT NOT NULL ,
  `class_id` INT NOT NULL ,
  PRIMARY KEY (`teacher_id`, `class_id`) ,
  INDEX `teacher_id_fk` (`teacher_id` ASC) ,
  INDEX `class_id_fk` (`class_id` ASC) ,
  CONSTRAINT `teacher_id_fk`
    FOREIGN KEY (`teacher_id` )
    REFERENCES `mydb`.`teachers` (`teacher_id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `class_id_fk`
    FOREIGN KEY (`class_id` )
    REFERENCES `mydb`.`classses` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;