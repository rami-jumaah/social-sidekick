<?php
require_once('codebird/codebird.php');

$subject = $_POST["subject"];
$twitter = $_POST["twitter"];
$facebook = $_POST["facebook"];
$slack = $_POST["slack"];



if(!empty($twitter)){

    // this part will not work, Ask Rami for it

    $params = array(
        'status' => $subject
    );
    $reply = $cb->statuses_update($params);
    echo "Hello There, <br/><br/> The Post will be ' $subject 'and that is already been posted on Twitter";

}else{
    echo "<br/>You wrote ' $subject ' but it will not be posted anywhere because:<br/> You didn't choose Twitter ";
}

if (!empty($facebook)){

}

if (!empty($slack)){
    /**
     * Send a Message to a Slack Channel.
     *
     * In order to get the API Token visit: https://api.slack.com/custom-integrations/legacy-tokens
     * The token will look something like this `xoxo-2100000415-0000000000-0000000000-ab1ab1`.
     *
     * @param string $message The message to post into a channel.
     * @param string $channel The name of the channel prefixed with #, example #foobar
     * @return boolean
     */
    function slack($message, $channel)
    {
        global $subject;
        $ch = curl_init("https://slack.com/api/chat.postMessage");
        $data = http_build_query([
            "token" => "Ask Rami for this part too",
            "channel" => $channel, "#m122-rami_fabi_alvin",
            "text" => $message, $subject,
            "username" => "M122",
        ]);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
// Example message will post "Hello world" into the random channel
    slack($subject, '#m122-rami_fabi_alvin');



}else{
    echo "<br/>You didn't choose Slack";
}
