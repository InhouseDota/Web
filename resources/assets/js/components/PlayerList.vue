<template>
  <!-- show a search box and list of players -->


    <div>
 <div class ="box bg-indigo-darker">
        <article class = "media">
        <div class="media-content">
            <div class="content"> 
                <div class="text-indigo-darkest font-semibold uppercase opacity-75 mb-4">Player Search</div>
        <p class="control has-icons-left">
            <input class="input is-small" type="text" placeholder="Search for tards by Username" id="inputSearch" v-model="search_term">
            <span class="icon is-small is-left">
                <i class="fas fa-search" aria-hidden="true"></i>
            </span>
        </p>

        <label class="checkbox">
            <input type="checkbox" v-model="checkedStatus">
             Only show the {{playerACount.length}}/{{ players.length }} available players
        </label>
        <table class="table-auto" id="playerTable">
            <thead>
                <th></th>
                <th @click="sort('username')">Username</th>
                <th @click="sort('rank')">Rank</th>
                <th @click="sort('mmr')">MMR estimate</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <player-list-item v-for="player in orderedPlayers" :player="player" :key="player.id64">
                </player-list-item>
            </tbody>
        </table>
            </div>
        </div>
    </article></div>
    </div>  
</template>


<script>
import PlayerListItem from '../components/PlayerListItem.vue' 
export default {
  props: [
      'players'
  ],
  data: () => {
      return{
          search_term: "",
          currentSort:'mmr',
          checkedStatus: false,
          currentSortDir:'desc'      
      }
  },
  components:{
      PlayerListItem
  },
  methods:{
    sort:function(s) {
    //if s == current sort, reverse
        if(s === this.currentSort) {
        this.currentSortDir = this.currentSortDir==='asc'?'desc':'asc';
        }
        this.currentSort = s;
        }
  },
  computed:{
            filteredPlayers: function(){
                return this.players.filter((player) => {
                    return player.username.toLowerCase().includes(this.search_term.toLowerCase());
                })
            },
            availablePlayers:function(){
            if(this.checkedStatus === true){
            return this.filteredPlayers.filter((player) => {
                return player.status.includes('yes');
                this.checkedStatus = false;
            })
            }
            else{
                return this.filteredPlayers;
            }
            },
            orderedPlayers:function() {
                return this.availablePlayers.sort((a,b) => {
                    let modifier = 1;
                    if(this.currentSortDir === 'desc') modifier = -1;
                    if(a[this.currentSort] < b[this.currentSort]) return -1 * modifier;
                    if(a[this.currentSort] > b[this.currentSort]) return 1 * modifier;
                return 0;
                });
            },
            playerACount:function() {
                return this.players.filter((player) => {
                    return player.status.includes('yes');
                    
            })}
  }
}
</script>
