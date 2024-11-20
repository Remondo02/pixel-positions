<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);
    // Act or Act and Assert at once
    expect($job->employer->is($employer))->toBeTrue();
    // Assert
});

it('can have tags', function () {
    $job = Job::factory()->create();
    $job->tag('Frontend');
    expect($job->tags)->toHaveCount(1);
});
