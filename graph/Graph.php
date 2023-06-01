<?php

class Graph
{
    private $adjacencyList = [];

    public function addEdge($vertex, $neighbor)
    {
        if (!isset($this->adjacencyList[$vertex])) {
            $this->adjacencyList[$vertex] = array();
        }
        $this->adjacencyList[$vertex][] = $neighbor;
    }

    public function breadthFirstSearch($start)
    {
        $visited = array();
        $queue = array();

        $visited[$start] = true;
        $queue[] = $start;

        while (!empty($queue)) {
            $vertex = array_shift($queue);
            echo $vertex . " ";

            if (isset($this->adjacencyList[$vertex])) {
                foreach ($this->adjacencyList[$vertex] as $neighbor) {
                    if (!isset($visited[$neighbor])) {
                        $visited[$neighbor] = true;
                        $queue[] = $neighbor;
                    }
                }
            }
        }
    }

    public function depthFirstSearch($start)
    {
        $visited = array();

        $this->dfsHelper($start, $visited);
    }

    private function dfsHelper($vertex, &$visited)
    {
        $visited[$vertex] = true;
        echo $vertex . " ";

        if (isset($this->adjacencyList[$vertex])) {
            foreach ($this->adjacencyList[$vertex] as $neighbor) {
                if (!isset($visited[$neighbor])) {
                    $this->dfsHelper($neighbor, $visited);
                }
            }
        }
    }
}

// New Graph
$graph = new Graph();
$graph->addEdge('A', 'B');
$graph->addEdge('A', 'C');
$graph->addEdge('B', 'D');
$graph->addEdge('B', 'E');
$graph->addEdge('C', 'F');
$graph->addEdge('E', 'G');

// BFS example
echo "BFS traversal: ";
$graph->breadthFirstSearch('A');

echo "\n";
// DFS example
echo "DFS traversal: ";
$graph->depthFirstSearch('A');