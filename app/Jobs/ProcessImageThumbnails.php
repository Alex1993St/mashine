<?php

namespace App\Jobs;

use App\Image as ImageModel;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;

//php artisan make:job ProcessImageThumbnails
class ProcessImageThumbnails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $image;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(ImageModel $image)
    {
        $this->image = $image;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $image = $this->image;
        $full_image_path = public_path($image->org_path);
        $resized_image_path = public_path('thumbs' . DIRECTORY_SEPARATOR .  $image->org_path);

        $img = \Image::make($full_image_path)->resize(300, 200);
        $img->save($resized_image_path);
    }
    //php artisan queue:work
}
