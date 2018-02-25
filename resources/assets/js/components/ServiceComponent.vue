<template>
    <div class="col col-md-8 p-2 m-3" style="border: solid 1px #DDDDDD;">
            <div class="card-block">
                <h5 class="card-title">
                    <a href="#" style="font-weight:500;">
                    {{service.service_name}}
                    </a>
                </h5>
                <hr>
                <p class="card-text">
                    {{service.description}}
                </p>
                <h6 class="card-subtitle mb-2 text-muted">by 
                    {{ service.user.name }}
                </h6>
                <span @click="comments = !comments"  
                class="card-link text-muted"><i class="fa fa-comments-o fa-2x"></i> 
                    &nbsp;&nbsp;&nbsp;<strong>comments ({{ numberOfComments }})</strong></span>
                    <span @click="like" class="card-link"  
                    :class="{ 'text-muted': !liked, 'text-primary': liked }"><i class="fa fa-thumbs-o-up fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;likes ({{ numberOfLikes }})</span>
                    <div v-if="comments">
                        <div class="actionBox">
                            <ul class="commentList">
                                <li>
                                    <div class="commenterImage">
                                    <img src="http://placekitten.com/45/45" />
                                    </div>
                                    <div class="commentText">
                                        <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>

                                    </div>
                                </li>
                                <li>
                                    <div class="commenterImage">
                                    <img src="http://placekitten.com/45/45" />
                                    </div>
                                    <div class="commentText">
                                        <p class="">Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p> <span class="date sub-text">on March 5th, 2014</span>

                                    </div>
                                </li>
                                <li>
                                    <div class="commenterImage">
                                    <img src="http://placekitten.com/45/45" />
                                    </div>
                                    <div class="commentText">
                                        <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>

                                    </div>
                                </li>
                            </ul>
                            <form class="form-inline" role="form">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Your comments" />
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-default">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log(this.service)
        },
        props: ['service','csrfToken'],
        data () {
            
            return {
                comments: false,
                numberOfLikes: 20,
                numberOfComments: 10,
                liked: false
            }
        },
        methods: {
            like () {
                if (this.liked) return this.unlike()
                this.liked = true
                this.numberOfLikes = this.numberOfLikes + 1
            },
            unlike () {
                if (!this.liked) return
                this.liked = false
                this.numberOfLikes = this.numberOfLikes - 1
            }

        }
    }
</script>
<style scoped>
.card-link {
    cursor: pointer;
}


.detailBox {
    width:320px;
    border:1px solid #bbb;
    margin:50px;
}
.titleBox {
    background-color:#fdfdfd;
    padding:10px;
}
.titleBox label{
  color:#444;
  margin:0;
  display:inline-block;
}

.commentBox {
padding:10px;
border-top:1px dotted #bbb;
}
.commentBox .form-group:first-child, .actionBox .form-group:first-child {
width:80%;
}
.commentBox .form-group:nth-child(2), .actionBox .form-group:nth-child(2) {
width:18%;
}
.actionBox .form-group * {
width:100%;
}
.taskDescription {
margin-top:10px 0;
}
.commentList {
padding:0;
list-style:none;
max-height:200px;
overflow:auto;
}
.commentList li {
margin:0;
margin-top:10px;
}
.commentList li > div {
display:table-cell;
}
.commenterImage {
width:30px;
margin-right:5px;
height:100%;
float:left;
}
.commenterImage img {
width:100%;
border-radius:50%;
}
.commentText p {
margin:0;
}
.sub-text {
color:#aaa;
font-family:verdana;
font-size:11px;
}
.actionBox {
border-top:1px dotted #bbb;
padding:10px;
}

</style>

