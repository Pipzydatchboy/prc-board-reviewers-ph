<?php

namespace Database\Seeders\LET\Majorship\EarlyChildhoodEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EarlyChildhoodEducationPart6Seeder extends Seeder
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

                // 101
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 6,
                    'question'     => 'Which reflex is present at birth and aids in feeding?',
                    'choices'      => json_encode(['Moro reflex','Rooting reflex','Palmar grasp reflex','Babinski reflex']),
                    'answer'       => 'Rooting reflex',
                    'explanation'  => 'The rooting reflex helps infants turn toward a touch on the cheek and begin feeding.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 102
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 6,
                    'question'     => 'According to Ainsworth, which attachment style describes children who are hesitant to explore and mixed in their reaction to reunion?',
                    'choices'      => json_encode(['Secure','Avoidant','Ambivalent','Disorganized']),
                    'answer'       => 'Ambivalent',
                    'explanation'  => 'Ambivalent attachment is marked by anxiety about exploring and ambivalence upon reunion with the caregiver.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 103
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 6,
                    'question'     => 'Bronfenbrenner’s chronosystem refers to which aspect of development?',
                    'choices'      => json_encode(['Immediate surroundings','Historical time and life transitions','Cultural values','Family relationships']),
                    'answer'       => 'Historical time and life transitions',
                    'explanation'  => 'The chronosystem encompasses the dimension of time as it relates to a child’s environments and transitions.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 104
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 6,
                    'question'     => 'Which nutritional deficiency in early childhood can lead to impaired cognitive development?',
                    'choices'      => json_encode(['Vitamin D deficiency','Iron deficiency','Vitamin C deficiency','Calcium deficiency']),
                    'answer'       => 'Iron deficiency',
                    'explanation'  => 'Iron deficiency anaemia can negatively impact brain development and cognitive function.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 105
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 6,
                    'question'     => 'Child temperament is best described as:',
                    'choices'      => json_encode(['Learned behaviors','Innate style of interacting with the world','Academic skills','Social norms']),
                    'answer'       => 'Innate style of interacting with the world',
                    'explanation'  => 'Temperament refers to biologically based individual differences in emotional reactivity and regulation.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 106
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 6,
                    'question'     => 'Which brain structure is most associated with memory formation in young children?',
                    'choices'      => json_encode(['Amygdala','Cerebellum','Hippocampus','Medulla']),
                    'answer'       => 'Hippocampus',
                    'explanation'  => 'The hippocampus plays a key role in the consolidation of new memories.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 107
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 6,
                    'question'     => 'Tellegen and Waller’s research on well-being in children emphasizes the balance of:',
                    'choices'      => json_encode(['Play and rest','Positive emotions and meaning','Diet and exercise','Academic and artistic skills']),
                    'answer'       => 'Positive emotions and meaning',
                    'explanation'  => 'Their work highlights eudaimonic and hedonic well-being dimensions in child development.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 108
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 6,
                    'question'     => 'Rovee-Collier’s mobile paradigm demonstrates which cognitive ability in infants?',
                    'choices'      => json_encode(['Object permanence','Operant conditioning','Deferred imitation','Symbolic thought']),
                    'answer'       => 'Operant conditioning',
                    'explanation'  => 'Infants learn to kick to move a mobile, showing early operant conditioning.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 109
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 6,
                    'question'     => 'The concept of “goodness of fit” in temperament refers to:',
                    'choices'      => json_encode(['How biology shapes environment','Match between child temperament and environment','Academic achievement','Social norms adherence']),
                    'answer'       => 'Match between child temperament and environment',
                    'explanation'  => 'Goodness of fit is the compatibility of a child’s temperament with their environment.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 110
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 6,
                    'question'     => 'Dynamic systems theory in motor development suggests behavior emerges from:',
                    'choices'      => json_encode(['Genetic preprogramming','Interaction of multiple subsystems','Single cause-effect pathways','Random variation']),
                    'answer'       => 'Interaction of multiple subsystems',
                    'explanation'  => 'Motor skills develop through complex interactions among neural, muscular, and environmental factors.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 111
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 6,
                    'question'     => 'Which theorist proposed the idea of “genetic epistemology”?',
                    'choices'      => json_encode(['Vygotsky','Piaget','Erikson','Skinner']),
                    'answer'       => 'Piaget',
                    'explanation'  => 'Piaget described genetic epistemology as the study of the origins of knowledge.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 112
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 6,
                    'question'     => 'Which early childhood period is most sensitive for language acquisition?',
                    'choices'      => json_encode(['Birth to 3 years','4 to 6 years','7 to 9 years','10 to 12 years']),
                    'answer'       => 'Birth to 3 years',
                    'explanation'  => 'The first three years are critical for rapid language development and brain plasticity.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 113
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 6,
                    'question'     => 'Which milestone reflects symbolic play in toddlers?',
                    'choices'      => json_encode(['Stacking blocks','Pretending a block is a phone','Crawling','Crying']),
                    'answer'       => 'Pretending a block is a phone',
                    'explanation'  => 'Symbolic play emerges when objects are used to represent others in play.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 114
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 6,
                    'question'     => 'Erikson’s stage for school-aged children is “Industry vs. Inferiority”; a negative outcome leads to:',
                    'choices'      => json_encode(['Inertia','Inferiority','Shame','Guilt']),
                    'answer'       => 'Inferiority',
                    'explanation'  => 'Failing to develop competence in this stage leads to feelings of inferiority.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 115
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 6,
                    'question'     => 'A key feature of attachment in toddlers is:',
                    'choices'      => json_encode(['Separation anxiety','Complete indifference','Immediate self-regulation','Academic focus']),
                    'answer'       => 'Separation anxiety',
                    'explanation'  => 'Toddlers show distress when separated from primary caregivers, indicating attachment.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 116
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 6,
                    'question'     => 'Which process describes synaptic pruning in early childhood?',
                    'choices'      => json_encode(['Growth of new neurons','Elimination of unused neural connections','Increase of glial cells','Formation of myelin sheath']),
                    'answer'       => 'Elimination of unused neural connections',
                    'explanation'  => 'Synaptic pruning refines neural circuits by removing excess synapses to enhance efficiency.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 117
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 6,
                    'question'     => 'Which factor influences temperament stability over time?',
                    'choices'      => json_encode(['Genetic disposition','Parenting style','Peer relationships','All of the above']),
                    'answer'       => 'All of the above',
                    'explanation'  => 'Temperament is shaped by genetics, environment, and social interactions.',
                    'created_at'   => $now,
                    'updated_at'   => $now
                ];
        
                // 118
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 6,
                    'question'     => 'According to Vygotsky, private speech in children is used for:',
                    'choices'      => json_encode(['Communicating with peers','Self-guidance and problem-solving','Reporting to adults','Academic grading']),
                    'answer'       => 'Self-guidance and problem-solving',
                    'explanation'  => 'Private speech helps children plan and regulate their behavior.',
                    'created_at'   => $now,
                    'updated_at'   => $now
                ];
        
                // 119
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 6,
                    'question'     => 'Which type of play involves rule-based games with others?',
                    'choices'      => json_encode(['Functional play','Symbolic play','Games with rules','Constructive play']),
                    'answer'       => 'Games with rules',
                    'explanation'  => 'Games with rules emerge later when children understand and follow agreed guidelines.',
                    'created_at'   => $now,
                    'updated_at'   => $now
                ];
        
                // 120
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 6,
                    'question'     => 'Which environmental factor contributes most to early brain development?',
                    'choices'      => json_encode(['Nutrition','Toxic stress','Secure relationships','All of the above']),
                    'answer'       => 'All of the above',
                    'explanation'  => 'Optimal nutrition, low stress, and secure attachments all support healthy brain growth.',
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}
