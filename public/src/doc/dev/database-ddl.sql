CREATE TABLE NACMS_HR_Registry (
    id              INT(11)         UNSIGNED NOT NULL AUTO_INCREMENT,
    username        VARCHAR(255)    NOT NULL,
    password        VARCHAR(255)    NOT NULL,
    name_first      VARCHAR(255)    NOT NULL,
    name_middle     VARCHAR(255)    NULL,
    name_last       VARCHAR(255)    NOT NULL,
    email           VARCHAR(255)    NOT NULL,
    phone           VARCHAR(255)    NOT NULL,
    active          TINYINT(1)      NOT NULL,
    
    PRIMARY KEY (id)
);



CREATE TABLE NACMS_HR_Editor (
    id              INT(11)         UNSIGNED NOT NULL AUTO_INCREMENT,
    fk_hr_registry  INT(11)         UNSIGNED NOT NULL,
    
    PRIMARY KEY (id),
    FOREIGN KEY (fk_hr_registry)
        REFERENCES NACMS_HR_Registry(id)
);



CREATE TABLE NACMS_HR_Journalist (  
    id              INT(11)         UNSIGNED NOT NULL AUTO_INCREMENT,
    fk_hr_registry  INT(11)         UNSIGNED NOT NULL,
    
    PRIMARY KEY (id),
    FOREIGN KEY (fk_hr_registry)
        REFERENCES NACMS_HR_Registry(id)
);



CREATE TABLE NACMS_HR_Photographer (  
    id              INT(11)         UNSIGNED NOT NULL AUTO_INCREMENT,
    fk_hr_registry  INT(11)         UNSIGNED NOT NULL,
    
    PRIMARY KEY (id), 
    FOREIGN KEY (fk_hr_registry)
        REFERENCES NACMS_HR_Registry(id)
);



CREATE TABLE NACMS_RegistryFolder (
    id              INT(11)         UNSIGNED NOT NULL AUTO_INCREMENT,
    name            VARCHAR(255)    NOT NULL,
    fk_parent       INT(11)         UNSIGNED NULL,
    
    PRIMARY KEY (id),
    FOREIGN KEY (fk_parent)
        REFERENCES NACMS_RegistryFolder(id)
);



CREATE TABLE NACMS_RegistryImage (   
    id              INT(11)         UNSIGNED NOT NULL AUTO_INCREMENT,
    name            VARCHAR(255)    NOT NULL,
    file            VARCHAR(255)    NOT NULL,
    fk_parent       INT(11)         UNSIGNED NULL,
    fk_uploader     INT(11)         UNSIGNED NOT NULL,
    
    PRIMARY KEY (id),
    FOREIGN KEY (fk_parent)
        REFERENCES NACMS_RegistryFolder(id),
    FOREIGN KEY (fk_uploader)
        REFERENCES NACMS_HR_Registry(id)
);



CREATE TABLE NACMS_Category (   
    id              INT(11)         UNSIGNED NOT NULL AUTO_INCREMENT,
    category        VARCHAR(255)    NOT NULL,
    fk_parent       INT(11)         UNSIGNED NULL,
    
    PRIMARY KEY (id),
    FOREIGN KEY (fk_parent)
        REFERENCES NACMS_Category(id)
);



CREATE TABLE NACMS_News (  
    id              INT(11)         UNSIGNED NOT NULL AUTO_INCREMENT,
    title           VARCHAR(40)     NOT NULL,
    subtitle        TEXT            NULL,
    date_created    DATETIME        NOT NULL,
    date_submit     DATETIME        NULL,
    date_min        DATETIME        NULL,
    date_max        DATETIME        NULL,
    submit_edit     TINYINT(1)      NOT NULL,
    submit_public   TINYINT(1)      NOT NULL,
    fk_category     INT(11)         UNSIGNED NOT NULL,
    fk_thumbnail    INT(11)         UNSIGNED NULL,
    fk_author       INT(11)         UNSIGNED NOT NULL,
    
    PRIMARY KEY (id),
    FOREIGN KEY (fk_category)
        REFERENCES NACMS_Category(id),
    FOREIGN KEY (fk_thumbnail)
        REFERENCES NACMS_RegistryImage(id),
    FOREIGN KEY (fk_author)
        REFERENCES NACMS_HR_Registry(id)
);



CREATE TABLE NACMS_NewsHeading (
    id              INT(11)         UNSIGNED NOT NULL AUTO_INCREMENT,
    text            VARCHAR(40)     NOT NULL,
    display         VARCHAR(255)    NOT NULL,
    position        INT(11)         NOT NULL,
    fk_news         INT(11)         UNSIGNED NOT NULL,
    
    PRIMARY KEY (id),
    FOREIGN KEY (fk_news)
        REFERENCES NACMS_News(id)
);



CREATE TABLE NACMS_NewsParagraph (   
    id              INT(11)         UNSIGNED NOT NULL AUTO_INCREMENT,
    text            TEXT            NOT NULL,
    display         VARCHAR(255)    NOT NULL,
    position        INT(11)         NOT NULL,
    fk_news         INT(11)         UNSIGNED NOT NULL,
    
    PRIMARY KEY (id),
    FOREIGN KEY (fk_news)
        REFERENCES NACMS_News(id)
);



CREATE TABLE NACMS_NewsHyperlink (
    id              INT(11)         UNSIGNED NOT NULL AUTO_INCREMENT,
    text            VARCHAR(255)    NOT NULL,
    display         VARCHAR(255)    NOT NULL,
    url             VARCHAR(255)    NOT NULL,
    position        INT(11)         NOT NULL,
    fk_news         INT(11)         UNSIGNED NOT NULL,
    
    PRIMARY KEY (id),
    FOREIGN KEY (fk_news)
        REFERENCES NACMS_News(id)
);



CREATE TABLE NACMS_NewsImage (
    id              INT(11)         UNSIGNED NOT NULL AUTO_INCREMENT,
    description     VARCHAR(255)    NULL,
    display         VARCHAR(255)    NOT NULL,
    position        INT(11)         NOT NULL,
    fk_news         INT(11)         UNSIGNED NOT NULL,
    fk_image        INT(11)         UNSIGNED NOT NULL,
    
    PRIMARY KEY (id),
    FOREIGN KEY (fk_news)
        REFERENCES NACMS_News(id),
    FOREIGN KEY (fk_image)
        REFERENCES NACMS_RegistryImage(id)
);