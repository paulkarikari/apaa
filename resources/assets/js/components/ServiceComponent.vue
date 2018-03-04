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
                class="card-link text-muted">
                <i class="fa fa-comments-o fa-2x"></i> 
                    &nbsp;&nbsp;&nbsp;<strong>comments</strong>
                    ({{service.comments.length}})</span>
                    <span @click="like" class="card-link"
                    :class="{ 'text-muted': !liked, 'text-primary': liked }"><i class="fa fa-thumbs-o-up fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;likes ({{ service.likes }})</span>
                    <span class="pull-right text-uppercase p-1" 
                    style="background-color:#039BE5; color:white;">{{ service.category.category_name }}</span>
                    <div v-if="comments">
                        <div class="actionBox">
                            <ul class="commentList">
                                <li v-for="feedback in service.comments" :key="feedback.id">
                                    <div class="commenterImage">
                                    <img src="/assets/images/blank-image.jpg" />
                                    </div>
                                    <div class="commentText">
                                        <p class="">{{feedback.comment}}</p> <span class="date sub-text">{{feedback.created_at}}</span>
                                    </div>
                                </li>
                                <li v-show="service.comments.length == 0"><p class="text-center">No Comments Yest</p> </li>
                            </ul>
                            <form v-show="canGiveFeedBack()" action="#" @submit.prevent="addComment" class="form-inline" role="form">
                                <div class="form-group">
                                    <input v-model="comment" class="form-control" type="text" placeholder="Your comments" required />
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
            console.log(this.user)
        },
        props: ['service','csrfToken','user'],
        data () {
            
            return {
                comment: '',
                comments: false,
                numberOfLikes: 20,
                numberOfComments: 10,
                liked: false
            }
        },
        methods: {
            like () {
                if(!this.canGiveFeedBack()) return
                let url = '/service/'+ this.service.id + '/like'
                axios.get(url)
                .then((response) => {
                    console.log(response)
                    if (this.liked) return this.unlike()
                    this.liked = true
                    this.service.likes = this.service.likes + 1
                }).catch((error) => {
                    console.log(error);
                });
                
            },
            unlike () {
                if(!this.canGiveFeedBack()) return
                let url = '/service/'+ this.service.id + '/unlike'
                axios.get(url)
                .then((response) =>{
                    console.log(response)
                    if (!this.liked) return
                    this.liked = false
                    this.service.likes = this.service.likes - 1
                }).catch((error) => {
                    console.log(error);
                });
                
            },
            addComment () {
                if(!this.canGiveFeedBack()) return
                let url = '/service/'+ this.service.id + '/addcomment'
                axios.post(url, {
                    comment: this.comment,
                    service_id: this.service.id
                }).then((response) => {
                    this.service.comments.push(response.data.comment);
                    this.comment = ''
                }).catch((error)=> {
                    console.log(error);
                });

            },
            canGiveFeedBack (){
                if (!this.user) {
                    return false
                }
                if(this.user.id === this.service.user.id){
                    return false
                }
                return true
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

