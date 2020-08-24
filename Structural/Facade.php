<?php
interface IShare{
    public function  setMessage($message);
    public function share();
}

class FacebookShare implements IShare {

    private $message;
    public function setMessage($message)
    {
        $this->message=$message;
    }

    public function share()
    {
        return ("Sharing to Facebook : $this->message");
    }
}
class TwitterShare implements IShare {

    private $message;
    public function setMessage($message)
    {
        $this->message=$message;
    }
    public function share()
    {
        return ("Sharing to Twitter :  $this->message");
    }
}

class SocialMediaShare
{
    private $facebookShare;
    private $twitterShare;
    public function __construct($facebookShare,$twitterShare)
    {
        $this->facebookShare=$facebookShare;
        $this->twitterShare=$twitterShare;
    }
    public function share($message)
    {
        $this->twitterShare->setMessage($message);
        $this->facebookShare->setMessage($message);

        echo $this->facebookShare->share();
        echo $this->twitterShare->share();

    }
}

$social=new SocialMediaShare(new FacebookShare(),new TwitterShare());
$social->share("video moi ne");