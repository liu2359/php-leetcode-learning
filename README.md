题目描述

给定一个二叉树，判断它是否是一棵平衡二叉树。平衡二叉树的定义是：每一节点的两个子树的高度相差不能超过1。

题目案例
```
    3
   / \
  9  20
    /  \
   15   7
```
上图中符合高度差不大于1的要求
```
      / \
     2   2
    / \
   3   3
  / \
 4   4
```
上图中根节点1的左右子树的高度差已然超过1，所以它不是平衡二叉树。

题目分析

如果是空树的话，那么是正确的，否则递归他的左右子树进行比较，最后用return -1来表示不平衡，具体php代码BalancedBinaryTree.php。
