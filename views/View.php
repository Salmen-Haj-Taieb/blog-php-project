<?php

class View
{

    //fichier vue

    private $_file;

    //title de la page
    private $_t;

    public function __construct($action)
    {
        $this->_file = 'views/view' . $action . '.php';
    }
    
    public function generatePost($data)
    {
        $content = $this->generateFile($this->_file, $data);
        $view = $this->generateFile(
            'views/viewAccueil.php',
            array(
                't' => $this->_t,
                'content' => $content,
                //'mostLiked'=>$mostLiked
            )
        );
        echo $view;
    }
    public function generateSearchPost($data)
    {
        $content = $this->generateFile($this->_file, $data);
        $view = $this->generateFile(
            'views/viewAccueil.php',
            array(
                't' => $this->_t,
                'search' => $content,
                //'mostLiked'=>$mostLiked
            )
        );
        echo $view;
    }
    public function generateAuthorsList($data)
    {
        $content = $this->generateFile($this->_file, $data);
        $view = $this->generateFile(
            'views/viewAccueil.php',
            array(
                't' => $this->_t,
                'manageAuthors' => $content,
                //'mostLiked'=>$mostLiked
            )
        );
        echo $view;
    }
    public function generateAuthorPosts($data)
    {
        $content = $this->generateFile($this->_file, $data);
        $view = $this->generateFile(
            'views/viewAccueil.php',
            array(
                't' => $this->_t,
                'authorPosts' => $content,
                //'mostLiked'=>$mostLiked
            )
        );
        echo $view;
    }

    public function generateAddPost()
    {
        $content = $this->generateFileSimple($this->_file);

        $view = $this->generateFile(
            'views/viewAddPost.php',
            array(
                't' => $this->_t,
                'content' => $content,
                //'mostLiked'=>$mostLiked
            )
        );
        echo $view;
    }
    public function generateNewsLetter()
    {
        $content = $this->generateFileSimple($this->_file);

        $view = $this->generateFile(
            'views/viewNewLetter.php',
            array(
                't' => $this->_t,
                'content' => $content,
                //'mostLiked'=>$mostLiked
            )
        );
        echo $view;
    }

    public function generateDemandAuthor()
    {
        $content = $this->generateFileSimple($this->_file);
        $view = $this->generateFile(
            'views/viewDemandAuthor.php',
            array(
                't' => $this->_t,
                'content' => $content,
                //'mostLiked'=>$mostLiked
            )
        );
        echo $view;
    }

    public function generateSignUpReader()
    {
        $content = $this->generateFileSimple($this->_file);
        $view = $this->generateFile(
            'views/viewSignUpReader.php',
            array(
                't' => $this->_t,
                'content' => $content,
                //'mostLiked'=>$mostLiked
            )
        );
        echo $view;
    }

    public function generateSignIn()
    {
        $content = $this->generateFileSimple($this->_file);
        $view = $this->generateFile(
            'views/viewSignIn.php',
            array(
                't' => $this->_t,
                'content' => $content,
                //'mostLiked'=>$mostLiked
            )
        );
        echo $view;
    }

    //crée une fonction qui va
    //générer et afficher la vue
    public function generate($data)
    {
        //définir le contenu à envoyer
        //$mostLiked= $this->generateFile($this->_file,$data["mostLikedArticles"]);
        $content = $this->generateFile($this->_file, $data);
        //mainPage
            $view = $this->generateFile(
                'views/mainPage.php',
                array(
                    't' => $this->_t,
                    'content' => $content,
                    //'mostLiked'=>$mostLiked
                )
            );
        echo $view;
    }

    private function generateFile($file, $data)
    {
        if (file_exists($file)) {
            extract($data);

            //commancer la temporisation
            ob_start();
            require $file;

            //arreter la temporisation
            return ob_get_clean();

        } else {
            throw new \Exception("file " . $file . " introvable", 1);
        }

    }

    private function generateFileSimple($file)
    {
        if (file_exists($file)) {

            require $file;

            //arreter la temporisation
            return ob_get_clean();

        } else {
            throw new \Exception("file " . $file . " introvable", 1);
        }

    }
}
