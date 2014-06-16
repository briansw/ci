# Read about factories at https://github.com/thoughtbot/factory_girl

FactoryGirl.define do
  factory :assignment do
    name "MyString"
    publish_on "2014-06-15 20:56:04"
    section "MyString"
    slug "MyString"
    active false
  end
end
