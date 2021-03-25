# php-leetcode-learning

### 

### ### 1、Leetcode之平衡二叉树（110）

**题目描述**：给定一个二叉树，判断它是否是一棵平衡二叉树。


**平衡二叉树定义**：每一个节点的两个子树的高度相差不能超过1。



**示例**:



图示1：
               3
             /    \
            9     20
                 /       \
                15      7

图示2：
               1
             /   \
           2      2
         /    \ 
       3       3
    /     \
  4        4

上面两个示例 图1为符合定义的平衡二叉树   图2左右子树的高度超过1所以他不是平衡二叉树



**题目分析**

如果是空树的话，那么是正确的，否则递归他的左右子树进行比较，最后用return -1来表示不平衡   代码`BalancedBinaryTree.php`