<?php

namespace Database\Seeders\LET\Majorship\SpecialNeedsEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SpecialNeedsEducationPart3Seeder extends Seeder
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

       // 41
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 3,
           'question'     => 'Which core deficit in ASD pertains to difficulty understanding others’ intentions?',
           'choices'      => json_encode([
               'Fine motor deficits',
               'Auditory processing deficits',
               'Theory of mind deficits',
               'Phonological processing'
           ]),
           'answer'       => 'Theory of mind deficits',
           'explanation'  => 'Individuals with ASD often struggle to infer the mental states and intentions of others.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 42
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 3,
           'question'     => 'Hyperlexia, often observed in children with ASD, refers to:',
           'choices'      => json_encode([
               'Early reading ability with comprehension delays',
               'Excessive tactile defensiveness',
               'Repetitive hand movements',
               'Delayed speech onset'
           ]),
           'answer'       => 'Early reading ability with comprehension delays',
           'explanation'  => 'Hyperlexia is characterized by advanced word decoding skills but poor language comprehension.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 43
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 3,
           'question'     => 'Stereotyped behaviors in autism include which example?',
           'choices'      => json_encode([
               'Organized play with peers',
               'Repetitive lining up of objects',
               'Engaging eye contact',
               'Flexible routines'
           ]),
           'answer'       => 'Repetitive lining up of objects',
           'explanation'  => 'Stereotyped behaviors are repetitive and ritualistic, such as lining up toys.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 44
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 3,
           'question'     => 'Which feature is common in ADHD combined type?',
           'choices'      => json_encode([
               'Primarily inattention only',
               'Primarily hyperactivity only',
               'Both inattention and hyperactivity-impulsivity',
               'Only impulsivity'
           ]),
           'answer'       => 'Both inattention and hyperactivity-impulsivity',
           'explanation'  => 'Combined type ADHD meets criteria for both major symptom clusters.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 45
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 3,
           'question'     => 'Pragmatic language impairment primarily affects:',
           'choices'      => json_encode([
               'Vocabulary knowledge',
               'Grammar usage',
               'Social use of language',
               'Phonetic articulation'
           ]),
           'answer'       => 'Social use of language',
           'explanation'  => 'Pragmatic impairments involve difficulties using language in social contexts.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 46
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 3,
           'question'     => 'Dyslexia is characterized by difficulties in:',
           'choices'      => json_encode([
               'Number sense',
               'Handwriting speed',
               'Phonological processing',
               'Gross motor skills'
           ]),
           'answer'       => 'Phonological processing',
           'explanation'  => 'Dyslexia involves deficits in processing and manipulating phonemes.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 47
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 3,
           'question'     => 'Dyscalculia involves significant difficulty with:',
           'choices'      => json_encode([
               'Reading comprehension',
               'Mathematical concepts and number sense',
               'Social interaction',
               'Fine motor coordination'
           ]),
           'answer'       => 'Mathematical concepts and number sense',
           'explanation'  => 'Dyscalculia refers to specific learning disability in math skills.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 48
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 3,
           'question'     => 'Dysgraphia refers to difficulties in:',
           'choices'      => json_encode([
               'Mathematics',
               'Reading fluency',
               'Handwriting and written expression',
               'Auditory discrimination'
           ]),
           'answer'       => 'Handwriting and written expression',
           'explanation'  => 'Dysgraphia affects fine motor skills for writing and organizing written text.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 49
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 3,
           'question'     => 'Central auditory processing disorder impacts the ability to:',
           'choices'      => json_encode([
               'Hear sounds at normal volumes',
               'Interpret and make sense of auditory information',
               'Produce speech sounds',
               'Understand written text'
           ]),
           'answer'       => 'Interpret and make sense of auditory information',
           'explanation'  => 'APD involves difficulty processing auditory signals despite normal hearing sensitivity.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 50
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 3,
           'question'     => 'Traumatic brain injury in students may present with:',
           'choices'      => json_encode([
               'Stable cognitive function',
               'Impairments in attention, memory, and executive function',
               'Isolated speech delay',
               'Only physical disability'
           ]),
           'answer'       => 'Impairments in attention, memory, and executive function',
           'explanation'  => 'TBI often leads to cognitive deficits affecting learning and behavior.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 51
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 3,
           'question'     => 'Intellectual disability requires onset before age:',
           'choices'      => json_encode([
               '5 years',
               '18 years',
               '12 years',
               '21 years'
           ]),
           'answer'       => '18 years',
           'explanation'  => 'ID must originate during the developmental period (before 18).',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 52
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 3,
           'question'     => 'Pragmatic language deficits in ASD are often evaluated through:',
           'choices'      => json_encode([
               'Standard IQ tests',
               'Observations of social communication behaviors',
               'Hearing screenings',
               'Vision assessments'
           ]),
           'answer'       => 'Observations of social communication behaviors',
           'explanation'  => 'Assessment of pragmatic skills focuses on how language is used in social contexts.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 53
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 3,
           'question'     => 'Stereotypic movement disorder is characterized by:',
           'choices'      => json_encode([
               'Repetitive, nonfunctional motor behaviors',
               'Advanced motor planning',
               'Only sensory-seeking behaviors',
               'Strictly verbal tics'
           ]),
           'answer'       => 'Repetitive, nonfunctional motor behaviors',
           'explanation'  => 'SMD includes behaviors like hand flapping or body rocking without purpose.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 54
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 3,
           'question'     => 'Selective mutism is best described as:',
           'choices'      => json_encode([
               'Failure to speak in specific social situations despite speaking elsewhere',
               'Total lack of speech across all settings',
               'Echolalia',
               'Stuttering'
           ]),
           'answer'       => 'Failure to speak in specific social situations despite speaking elsewhere',
           'explanation'  => 'Selective mutism is an anxiety disorder affecting speech in certain contexts.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 55
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 3,
           'question'     => 'Developmental coordination disorder involves:',
           'choices'      => json_encode([
               'Motor skill deficits impacting daily activities',
               'Language impairments',
               'Sensory processing hypersensitivity',
               'Intellectual impairments'
           ]),
           'answer'       => 'Motor skill deficits impacting daily activities',
           'explanation'  => 'DCD affects coordination and motor planning, interfering with tasks like writing.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 56
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 3,
           'question'     => 'Specific language impairment is identified by:',
           'choices'      => json_encode([
               'Language deficits without other explanatory conditions',
               'Visual impairment',
               'Motor disability',
               'Global intellectual disability'
           ]),
           'answer'       => 'Language deficits without other explanatory conditions',
           'explanation'  => 'SLI involves language delays unexplained by hearing or cognitive impairments.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 57
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 3,
           'question'     => 'Fetal alcohol spectrum disorders may include:',
           'choices'      => json_encode([
               'Facial anomalies and neurobehavioral deficits',
               'Enhanced cognitive abilities',
               'Only physical growth delays',
               'Exclusive motor impairments'
           ]),
           'answer'       => 'Facial anomalies and neurobehavioral deficits',
           'explanation'  => 'FASD encompasses a range of effects from prenatal alcohol exposure.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 58
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 3,
           'question'     => 'Tourette syndrome involves:',
           'choices'      => json_encode([
               'Multiple motor and one or more vocal tics',
               'Only sensory hypersensitivity',
               'Exclusive language delays',
               'Physical paralysis'
           ]),
           'answer'       => 'Multiple motor and one or more vocal tics',
           'explanation'  => 'TS is characterized by both motor and vocal tics lasting over a year.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 59
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 3,
           'question'     => 'Conduct disorder is defined by:',
           'choices'      => json_encode([
               'Persistent violation of societal norms and rights of others',
               'Only attention deficits',
               'Sensory impairment',
               'Speech disorders'
           ]),
           'answer'       => 'Persistent violation of societal norms and rights of others',
           'explanation'  => 'CD includes aggressive and rule-breaking behaviors that impair functioning.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 60
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 3,
           'question'     => 'Spasticity in cerebral palsy results from injury to the:',
           'choices'      => json_encode([
               'Motor cortex and corticospinal tracts',
               'Auditory pathways',
               'Visual cortex',
               'Sensory ganglia'
           ]),
           'answer'       => 'Motor cortex and corticospinal tracts',
           'explanation'  => 'Spastic CP is due to damage in areas controlling muscle tone and movement.',
           'created_at'   => $now,
           'updated_at'   => $now
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
       $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
   }

   // 3) Abort seeding if duplicates found or insufficient items
   if (!empty($dupes) || $batchCount < 20) {
       $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
       return;
   }

   // 4) Insert all questions if checks pass
   DB::table('questions')->insert($batch);
   $this->command->info("{$batchCount} question(s) seeded for part 3.");
}
}