<?php
    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isBalanced($root) {
        return $this->high($root) !==-1;
    }
    
    /**
     * 判断节点高度
     * @param type $root 根节点
     * @return int
     */
    function high($root){
        if(!$root){
            return 0;
        }
        $left=$this->high($root->left); //左节点
        $right=$this->high($root->right); //右节点
     
        if($left==-1 ||$right==-1 || abs($left-$right)>1){
            return -1;
        }
        return max($left,$right)+1;
    }