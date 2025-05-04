<?php

namespace Database\Seeders\LET\Majorship\PhysicalEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhysicalEducationPart1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

       //Question Starts Here...
       $batch = [];

       // Part 1: Foundations of Physical Education (Anatomical, mechanical & physiological bases)

       //1
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 1,
           'question'    => 'What is the primary function of the cardiovascular system during exercise?',
           'choices'     => json_encode([
               'To deliver oxygen and nutrients to working muscles',
               'To store excess energy',
               'To regulate body temperature',
               'To break down lactic acid',
           ]),
           'answer'      => 'To deliver oxygen and nutrients to working muscles',
           'explanation' => 'The cardiovascular system transports oxygen and nutrients through blood to active tissues during exercise.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //2
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 1,
           'question'    => 'Which muscle fiber type is most resistant to fatigue?',
           'choices'     => json_encode([
               'Type I (slow-twitch)',
               'Type IIa (fast oxidative)',
               'Type IIb (fast glycolytic)',
               'Type III (intermediate)',
           ]),
           'answer'      => 'Type I (slow-twitch)',
           'explanation' => 'Type I fibers are highly oxidative and fatigue-resistant, suited for endurance activities.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //3
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 1,
           'question'    => 'Which anatomical plane divides the body into left and right portions?',
           'choices'     => json_encode([
               'Sagittal plane',
               'Frontal plane',
               'Transverse plane',
               'Coronal plane',
           ]),
           'answer'      => 'Sagittal plane',
           'explanation' => 'The sagittal plane runs vertically, separating the body into left and right halves.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //4
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 1,
           'question'    => 'What does VO2 max represent?',
           'choices'     => json_encode([
               'Maximum oxygen uptake during intense exercise',
               'Resting heart rate',
               'Maximum lung capacity',
               'Peak blood pressure',
           ]),
           'answer'      => 'Maximum oxygen uptake during intense exercise',
           'explanation' => 'VO2 max indicates the highest rate at which oxygen can be used during maximal aerobic effort.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //5
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 1,
           'question'    => 'Which principle states that the body adapts specifically to the demands placed on it?',
           'choices'     => json_encode([
               'SAID principle',
               'Overload principle',
               'Reversibility principle',
               'Progression principle',
           ]),
           'answer'      => 'SAID principle',
           'explanation' => 'Specific Adaptation to Imposed Demands (SAID) means training adaptations are specific to the stimulus provided.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //6
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 1,
           'question'    => 'Which joint movement decreases the angle between two bones?',
           'choices'     => json_encode([
               'Flexion',
               'Extension',
               'Abduction',
               'Adduction',
           ]),
           'answer'      => 'Flexion',
           'explanation' => 'Flexion reduces the angle between skeletal elements, e.g., bending the elbow.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //7
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 1,
           'question'    => 'Which energy system provides ATP for activities lasting up to 10 seconds?',
           'choices'     => json_encode([
               'ATP-PC system',
               'Glycolytic system',
               'Oxidative system',
               'Lactic acid system',
           ]),
           'answer'      => 'ATP-PC system',
           'explanation' => 'The phosphagen (ATP-PC) system supplies immediate energy for short, high-intensity efforts.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //8
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 1,
           'question'    => 'What is the function of alveoli in the respiratory system?',
           'choices'     => json_encode([
               'Gas exchange',
               'Air filtration',
               'Sound production',
               'Mucus secretion',
           ]),
           'answer'      => 'Gas exchange',
           'explanation' => 'Alveoli are microscopic sacs where oxygen and carbon dioxide diffuse between air and blood.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //9
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 1,
           'question'    => 'Which component of blood carries oxygen to tissues?',
           'choices'     => json_encode([
               'Red blood cells',
               'White blood cells',
               'Platelets',
               'Plasma',
           ]),
           'answer'      => 'Red blood cells',
           'explanation' => 'Red blood cells contain hemoglobin which binds and transports oxygen throughout the body.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //10
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 1,
           'question'    => 'Which macronutrient is the primary fuel during prolonged moderate exercise?',
           'choices'     => json_encode([
               'Fat',
               'Protein',
               'Carbohydrate',
               'Vitamin',
           ]),
           'answer'      => 'Fat',
           'explanation' => 'During extended moderate-intensity activity, fat oxidation provides significant energy.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //11
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 1,
           'question'    => 'What is the normal resting adult heart rate range?',
           'choices'     => json_encode([
               '60-100 beats per minute',
               '40-60 beats per minute',
               '100-120 beats per minute',
               '120-140 beats per minute',
           ]),
           'answer'      => '60-100 beats per minute',
           'explanation' => 'Resting pulse for adults typically falls between 60 and 100 bpm.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //12
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 1,
           'question'    => 'Which principle states that fitness gains are lost when training stops?',
           'choices'     => json_encode([
               'Reversibility principle',
               'Specificity principle',
               'Overload principle',
               'Progressive principle',
           ]),
           'answer'      => 'Reversibility principle',
           'explanation' => 'Reversibility means benefits decline when training stimulus is removed.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //13
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 1,
           'question'    => 'What is the role of the epiphyseal plate in long bones?',
           'choices'     => json_encode([
               'Facilitates longitudinal growth',
               'Stores marrow',
               'Produces red blood cells',
               'Anchors tendons',
           ]),
           'answer'      => 'Facilitates longitudinal growth',
           'explanation' => 'The growth plate is where new bone is produced during childhood and adolescence.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //14
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 1,
           'question'    => 'Which hormone increases in response to high-intensity exercise?',
           'choices'     => json_encode([
               'Epinephrine (adrenaline)',
               'Insulin',
               'Melatonin',
               'Estrogen',
           ]),
           'answer'      => 'Epinephrine (adrenaline)',
           'explanation' => 'Adrenaline elevates heart rate and energy availability during stress and exercise.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //15
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 1,
           'question'    => 'What is hypertrophy in muscle tissue?',
           'choices'     => json_encode([
               'Increase in muscle fiber size',
               'Increase in fibrous tissue',
               'Decrease in muscle cells',
               'Fluid retention',
           ]),
           'answer'      => 'Increase in muscle fiber size',
           'explanation' => 'Hypertrophy refers to growth of muscle cells resulting in increased muscle mass.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //16
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 1,
           'question'    => 'Which body system regulates temperature through sweating?',
           'choices'     => json_encode([
               'Integumentary system',
               'Digestive system',
               'Skeletal system',
               'Endocrine system',
           ]),
           'answer'      => 'Integumentary system',
           'explanation' => 'Skin and sweat glands help dissipate heat to maintain homeostasis.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //17
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 1,
           'question'    => 'What does the term kinematics study in biomechanics?',
           'choices'     => json_encode([
               'Motion without regard to forces',
               'Forces causing motion',
               'Muscle structure',
               'Bone density',
           ]),
           'answer'      => 'Motion without regard to forces',
           'explanation' => 'Kinematics analyzes movement aspects like velocity and acceleration.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //18
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 1,
           'question'    => 'Which principle involves gradual increase of training load over time?',
           'choices'     => json_encode([
               'Progressive overload',
               'Specificity',
               'Recovery principle',
               'Variety principle',
           ]),
           'answer'      => 'Progressive overload',
           'explanation' => 'Increasing volume or intensity stimulates continued adaptation.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //19
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 1,
           'question'    => 'Which structure connects muscle to bone?',
           'choices'     => json_encode([
               'Tendon',
               'Ligament',
               'Fascia',
               'Cartilage',
           ]),
           'answer'      => 'Tendon',
           'explanation' => 'Tendons attach muscle to bone, transmitting force for movement.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //20
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 1,
           'question'    => 'Which term describes the ability of a muscle to exert force?',
           'choices'     => json_encode([
               'Muscular strength',
               'Muscular endurance',
               'Flexibility',
               'Agility',
           ]),
           'answer'      => 'Muscular strength',
           'explanation' => 'Strength is the maximal force a muscle can generate under voluntary activation.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

 



        // Retrieve existing questions to detect duplicates
        $existing = DB::table('questions')
            ->pluck('question')
            ->map(fn($q) => trim($q))
            ->all();

        // Check for duplicates against DB
        $dupes = [];
        foreach ($batch as $item) {
            if (in_array(trim($item['question']), $existing, true)) {
                $dupes[] = $item;
            }
        }

        $batchCount = count($batch);

        // 1) Inform about duplicates
        if (!empty($dupes)) {
            $this->command->warn("Detected " . count($dupes) . " duplicate question(s):");
            foreach ($dupes as $d) {
                $this->command->warn("  - {$d['question']}");
            }
        }

        // 2) Inform if question count is less than required
        if ($batchCount < 20) {
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}
