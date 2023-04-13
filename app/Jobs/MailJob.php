<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;
use TheSeer\Tokenizer\Exception;
use Illuminate\Support\Facades\Log;

class MailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $mailArr = [];
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($to, $from, $subject, $body = '', $template = '', $data = [], $cc = '', $bcc ='', $attachments = []) 
    {
        $this->mailArr['to'] = $to;
        $this->mailArr['from'] = $from;
        $this->mailArr['subject'] = $subject;
        $this->mailArr['body'] = $body;
        $this->mailArr['template'] = $template;
        $this->mailArr['data'] = $data;
        $this->mailArr['cc'] = $cc;
        $this->mailArr['bcc'] = $bcc;
        $this->mailArr['attachments'] = $attachments;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            $mailData = $this->mailArr;
            if(!empty($mailData['template'])) 
            {
                Log::info($mailData['data']);
                Mail::send($mailData['template'], $mailData, function($message) use ($mailData) {
                    $message->from($mailData['from']['email'], $mailData['from']['name']);
                    $message->to($mailData['to']);
                    $message->subject($mailData['subject']);
                    if(!empty($mailData['cc'])) {
                        $message->cc($mailData['cc'], $name = null);
                    }
                    if(!empty($mailData['bcc'])) {
                        $message->bcc($mailData['bcc'], $name = null);
                    }
                    if(!empty($mailData['attachments'])) {
                        foreach($mailData['attachments'] as $file) {
                            $message->attach($file);
                        }
                    }
                    
                });    
            }
            else if(!empty($mailData['body'])) 
            {
                Mail::send($mailData['body'], $mailData, function($message) use ($mailData) {
                    $message->from($mailData['from']['email'], $mailData['from']['name']);
                    $message->to($mailData['to']);
                    $message->subject($mailData['subject']);
                    if(!empty($mailData['cc'])) {
                        $message->cc($mailData['cc'], $name = null);
                    }
                    if(!empty($mailData['bcc'])) {
                        $message->bcc($mailData['bcc'], $name = null);
                    }
                    if(!empty($mailData['attachments'])) {
                        foreach($mailData['attachments'] as $file) {
                            $message->attach($file);
                        }
                    }
                });    
            }
        }
        catch (Exception $e) {}
    }
}
