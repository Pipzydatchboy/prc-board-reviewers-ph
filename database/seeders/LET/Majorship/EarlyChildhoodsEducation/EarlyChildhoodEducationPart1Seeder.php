<?php

namespace Database\Seeders\LET\Majorship\EarlyChildhoodEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EarlyChildhoodEducationPart1Seeder extends Seeder
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

       // 1
       $batch[] = [
           'subject_id'   => 8,
           'part'         => 1,
           'question'     => 'At which age range does Piaget\'s concept of object permanence typically develop?',
           'choices'      => json_encode(['0–2 months','4–8 months','12–18 months','24–30 months']),
           'answer'       => '4–8 months',
           'explanation'  => 'Object permanence emerges in the sensorimotor stage around 4–8 months when infants understand that objects continue to exist when out of sight.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 2
       $batch[] = [
           'subject_id'   => 8,
           'part'         => 1,
           'question'     => 'According to Erikson, successful resolution of Trust vs. Mistrust leads to which virtue?',
           'choices'      => json_encode(['Hope','Will','Purpose','Competence']),
           'answer'       => 'Hope',
           'explanation'  => 'Trust vs. Mistrust stage (0–18 months) when resolved leads to the virtue of hope.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 3
       $batch[] = [
           'subject_id'   => 8,
           'part'         => 1,
           'question'     => 'Vygotsky\'s Zone of Proximal Development refers to which concept?',
           'choices'      => json_encode(['Independent tasks only','Tasks beyond ability even with help','Tasks achievable with guided assistance','Adult-led tasks']),
           'answer'       => 'Tasks achievable with guided assistance',
           'explanation'  => 'ZPD is the gap between what learners can do independently and what they can do with guidance.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 4
       $batch[] = [
           'subject_id'   => 8,
           'part'         => 1,
           'question'     => 'Which gross motor skill is expected of most 2-year-olds?',
           'choices'      => json_encode(['Hopping on one foot','Riding a tricycle','Running steadily','Standing on tiptoe']),
           'answer'       => 'Running steadily',
           'explanation'  => 'By age 2, children typically run with improved balance and coordination.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 5
       $batch[] = [
           'subject_id'   => 8,
           'part'         => 1,
           'question'     => 'A common fine motor milestone for 3-year-olds is:',
           'choices'      => json_encode(['Building a tower of 9 blocks','Writing full sentences','Using scissors accurately','Drawing complex shapes']),
           'answer'       => 'Building a tower of 9 blocks',
           'explanation'  => 'By age 3, children can typically stack 8–10 blocks.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 6
       $batch[] = [
           'subject_id'   => 8,
           'part'         => 1,
           'question'     => 'Which behavior demonstrates secure attachment in young children?',
           'choices'      => json_encode(['Ignoring caregiver on return','Distress on separation and joy on reunion','Fearful responses to both caregiver and stranger','Seeking comfort from strangers only']),
           'answer'       => 'Distress on separation and joy on reunion',
           'explanation'  => 'Securely attached children show distress at separation and happiness at reunion.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 7
       $batch[] = [
           'subject_id'   => 8,
           'part'         => 1,
           'question'     => 'Parallel play, where children play alongside but not with peers, typically emerges at age:',
           'choices'      => json_encode(['6–12 months','1–2 years','2–3 years','4–5 years']),
           'answer'       => '2–3 years',
           'explanation'  => 'Parallel play peaks around age 2–3 before cooperative play develops.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 8
       $batch[] = [
           'subject_id'   => 8,
           'part'         => 1,
           'question'     => 'Emergent writing in preschoolers is first seen as:',
           'choices'      => json_encode(['Copying letters accurately','Drawing scribbles','Writing full words','Typing on a keyboard']),
           'answer'       => 'Drawing scribbles',
           'explanation'  => 'Emergent writing begins with scribbles that represent written language.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 9
       $batch[] = [
           'subject_id'   => 8,
           'part'         => 1,
           'question'     => 'According to Montessori, a "prepared environment" should be:',
           'choices'      => json_encode(['Teacher-centered','Child-centered and orderly','Unstructured free-for-all','Strict and rule-based']),
           'answer'       => 'Child-centered and orderly',
           'explanation'  => 'Montessori environments promote independence and structure for exploration.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 10
       $batch[] = [
           'subject_id'   => 8,
           'part'         => 1,
           'question'     => 'In the DepEd Early Learning Development Standards, the "Safe and Secure" competency belongs to the domain:',
           'choices'      => json_encode(['Language Concepts','Self and Others','Mathematical Concepts','Creative Arts']),
           'answer'       => 'Self and Others',
           'explanation'  => '"Safe and Secure" is under the Self and Others domain in ELDS.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 11
       $batch[] = [
           'subject_id'   => 8,
           'part'         => 1,
           'question'     => 'Which curriculum model emphasizes documentation and emergent projects based on children\'s interests?',
           'choices'      => json_encode(['HighScope','Reggio Emilia','Waldorf','Bank Street']),
           'answer'       => 'Reggio Emilia',
           'explanation'  => 'Reggio Emilia focuses on emergent curriculum and documenting children\'s learning.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 12
       $batch[] = [
           'subject_id'   => 8,
           'part'         => 1,
           'question'     => 'Dramatic play centers primarily support:',
           'choices'      => json_encode(['Gross motor development','Social and language skills','Mathematical reasoning','Scientific inquiry']),
           'answer'       => 'Social and language skills',
           'explanation'  => 'Dramatic play fosters communication, cooperation, and imagination.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 13
       $batch[] = [
           'subject_id'   => 8,
           'part'         => 1,
           'question'     => 'A routine with visual schedules helps reduce transition anxiety by:',
           'choices'      => json_encode(['Introducing unexpected changes','Providing predictability','Randomly rearranging activities','Using loud announcements']),
           'answer'       => 'Providing predictability',
           'explanation'  => 'Predictable routines and visual cues support children\'s sense of security.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 14
       $batch[] = [
           'subject_id'   => 8,
           'part'         => 1,
           'question'     => 'Behaviorist techniques in ECE classrooms most often involve:',
           'choices'      => json_encode(['Open-ended inquiry','Operant conditioning with reinforcement','Unstructured play','Concept mapping']),
           'answer'       => 'Operant conditioning with reinforcement',
           'explanation'  => 'Behaviorism uses reinforcement to shape and increase desired behaviors.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 15
       $batch[] = [
           'subject_id'   => 8,
           'part'         => 1,
           'question'     => 'Constructivist approaches in ECE emphasize learning through:',
           'choices'      => json_encode(['Passive listening','Hands-on exploration and reflection','Rote memorization','Standardized testing']),
           'answer'       => 'Hands-on exploration and reflection',
           'explanation'  => 'Constructivism encourages children to build knowledge through active engagement.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 16
       $batch[] = [
           'subject_id'   => 8,
           'part'         => 1,
           'question'     => 'Which theory proposes multiple intelligences such as linguistic and logical-mathematical?',
           'choices'      => json_encode(['Behaviorism','Constructivism','Gardner\'s Multiple Intelligences','Piagetian Stages']),
           'answer'       => 'Gardner\'s Multiple Intelligences',
           'explanation'  => 'Howard Gardner proposed eight distinct intelligences, including linguistic and logical-mathematical.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 17
       $batch[] = [
           'subject_id'   => 8,
           'part'         => 1,
           'question'     => 'Anecdotal records in ECE assessment are:',
           'choices'      => json_encode(['Numerical scores only','Brief narrative observations','Standardized tests','Multiple-choice quizzes']),
           'answer'       => 'Brief narrative observations',
           'explanation'  => 'Anecdotal records are short, descriptive notes of significant events or behaviors.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 18
       $batch[] = [
           'subject_id'   => 8,
           'part'         => 1,
           'question'     => 'Portfolios in early childhood assessment consist of:',
           'choices'      => json_encode(['Child artifacts over time','Single test score','Teacher journal only','Attendance records']),
           'answer'       => 'Child artifacts over time',
           'explanation'  => 'Portfolios showcase a collection of children\'s works and progress.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 19
       $batch[] = [
           'subject_id'   => 8,
           'part'         => 1,
           'question'     => 'Home visits by teachers primarily support:',
           'choices'      => json_encode(['Disciplinary actions','Understanding family context','Testing children at home','Scheduling meetings']),
           'answer'       => 'Understanding family context',
           'explanation'  => 'Home visits build partnerships by learning about children\'s home environments and cultures.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 20
       $batch[] = [
           'subject_id'   => 8,
           'part'         => 1,
           'question'     => 'Which professional document guides ethics and standards in ECE practice?',
           'choices'      => json_encode(['Child Protection Policy','Code of Ethics for Early Childhood Educators','Curriculum Guide','Learning Story Template']),
           'answer'       => 'Code of Ethics for Early Childhood Educators',
           'explanation'  => 'A professional code of ethics outlines standards and responsibilities for educators.',
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
