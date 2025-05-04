<?php

namespace Database\Seeders\LET\Majorship\Mathematics;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MathematicsPart8Seeder extends Seeder
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

       // 141
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 8,
           'question'    => "What is the 10th term of the arithmetic sequence defined by a_n = 3 + (n-1)*5?",
           'choices'     => json_encode([
               '48',
               '50',
               '45',
               '53',
           ]),
           'answer'      => '48',
           'explanation' => 'a_{10} = 3 + (10-1)*5 = 3 + 45 = 48.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 142
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 8,
           'question'    => "What is the sum of the first 10 terms of the sequence in Q141?",
           'choices'     => json_encode([
               '255',
               '260',
               '240',
               '250',
           ]),
           'answer'      => '255',
           'explanation' => 'Sum = n/2*(first + last) = 10/2*(3 + 48) = 5*51 = 255.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 143
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 8,
           'question'    => "Find the 5th term of the geometric sequence with first term 2 and common ratio 3.",
           'choices'     => json_encode([
               '162',
               '54',
               '486',
               '81',
           ]),
           'answer'      => '162',
           'explanation' => 'a_5 = 2*3^{4} = 2*81 = 162.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 144
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 8,
           'question'    => "Given a_1=3 and a_n = 2a_{n-1}, what is a_4?",
           'choices'     => json_encode([
               '24',
               '12',
               '16',
               '18',
           ]),
           'answer'      => '24',
           'explanation' => 'a_2=6, a_3=12, a_4=24 by doubling each term.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 145
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 8,
           'question'    => "What is 17 mod 5?",
           'choices'     => json_encode([
               '2',
               '3',
               '4',
               '1',
           ]),
           'answer'      => '2',
           'explanation' => '17 = 3*5 + 2, so remainder is 2.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 146
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 8,
           'question'    => "Solve the system x ≡ 2 (mod 3) and x ≡ 3 (mod 5) using CRT.",
           'choices'     => json_encode([
               '8',
               '2',
               '11',
               '7',
           ]),
           'answer'      => '8',
           'explanation' => 'x=8 satisfies 8 mod3=2 and 8 mod5=3.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 147
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 8,
           'question'    => "Is 123 divisible by 3?",
           'choices'     => json_encode([
               'Yes',
               'No',
               'Only by 9',
               'Only by 11',
           ]),
           'answer'      => 'Yes',
           'explanation' => 'Sum of digits 1+2+3=6 divisible by 3, so 123 divisible by 3.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 148
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 8,
           'question'    => "What is Euler’s totient φ(9)?",
           'choices'     => json_encode([
               '6',
               '3',
               '9',
               '8',
           ]),
           'answer'      => '6',
           'explanation' => 'Numbers <9 coprime to 9: 1,2,4,5,7,8 → 6.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 149
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 8,
           'question'    => "How many subsets does a set of size 5 have?",
           'choices'     => json_encode([
               '32',
               '16',
               '10',
               '25',
           ]),
           'answer'      => '32',
           'explanation' => 'Number of subsets = 2^n = 2^5 = 32.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 150
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 8,
           'question'    => "By the pigeonhole principle, if 13 items are placed into 12 boxes, one box must contain at least how many items?",
           'choices'     => json_encode([
               '2',
               '1',
               '3',
               '13',
           ]),
           'answer'      => '2',
           'explanation' => 'With 13 items, at least one box has ⌈13/12⌉=2 items.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 151
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 8,
           'question'    => "What is the binary representation of the decimal number 13?",
           'choices'     => json_encode([
               '1101',
               '1011',
               '1110',
               '1001',
           ]),
           'answer'      => '1101',
           'explanation' => '13 = 8+4+0+1 → bits 1101.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 152
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 8,
           'question'    => "Convert binary 10110 to decimal.",
           'choices'     => json_encode([
               '22',
               '20',
               '18',
               '24',
           ]),
           'answer'      => '22',
           'explanation' => '1·16+0·8+1·4+1·2+0·1 = 16+4+2 = 22.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 153
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 8,
           'question'    => "A tree with n vertices has how many edges?",
           'choices'     => json_encode([
               'n - 1',
               'n',
               '2n',
               'n + 1',
           ]),
           'answer'      => 'n - 1',
           'explanation' => 'A tree is a connected acyclic graph with n-1 edges.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 154
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 8,
           'question'    => "What is the maximum number of edges in a simple undirected graph with n vertices?",
           'choices'     => json_encode([
               'n(n-1)/2',
               'n^2',
               'n(n+1)/2',
               '2n',
           ]),
           'answer'      => 'n(n-1)/2',
           'explanation' => 'Complete graph has edges between every pair: C(n,2)=n(n-1)/2.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 155
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 8,
           'question'    => "The number of ways to correctly parenthesize 4 factors (Catalan number) is:",
           'choices'     => json_encode([
               '5',
               '14',
               '42',
               '6',
           ]),
           'answer'      => '5',
           'explanation' => 'Catalan number C_3 = 5 for n=4 factors.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 156
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 8,
           'question'    => "Which logical statement is false?",
           'choices'     => json_encode([
               'True → False',
               'False → True',
               'True → True',
               'False → False',
           ]),
           'answer'      => 'True → False',
           'explanation' => 'Implication true→false is false; all others are true.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 157
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 8,
           'question'    => "What is the intersection of sets A={1,2,3} and B={2,3,4}?",
           'choices'     => json_encode([
               '{2,3}',
               '{1,4}',
               '{1,2,3,4}',
               '∅',
           ]),
           'answer'      => '{2,3}',
           'explanation' => 'Elements common to both sets are 2 and 3.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 158
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 8,
           'question'    => "Use inclusion-exclusion: |A∪B| given |A|=5, |B|=7, |A∩B|=2?",
           'choices'     => json_encode([
               '10',
               '12',
               '7',
               '2',
           ]),
           'answer'      => '10',
           'explanation' => '|A∪B| = |A|+|B| - |A∩B| = 5+7-2 = 10.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 159
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 8,
           'question'    => "Base case in proof by induction usually verifies the statement for:",
           'choices'     => json_encode([
               'n=1',
               'n=0',
               'n=2',
               'All above',
           ]),
           'answer'      => 'All above',
           'explanation' => 'Base case can start at n=0,1 or given initial index.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 160
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 8,
           'question'    => "What is the modular inverse of 3 modulo 11?",
           'choices'     => json_encode([
               '4',
               '3',
               '7',
               '8',
           ]),
           'answer'      => '4',
           'explanation' => '3·4 ≡ 12 ≡ 1 (mod 11), so inverse of 3 is 4.',
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}
